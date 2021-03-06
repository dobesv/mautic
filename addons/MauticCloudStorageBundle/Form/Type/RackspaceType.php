<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticAddon\MauticCloudStorageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class RackspaceType
 */
class RackspaceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('serverLocation', 'choice', array(
            'label'       => 'mautic.integration.Rackspace.server.location',
            'choices'     => array(
                'us' => 'mautic.integration.Rackspace.server.location.us',
                'uk' => 'mautic.integration.Rackspace.server.location.uk',
            ),
            'required'    => true,
            'label_attr'  => array('class' => 'control-label'),
            'attr'        => array(
                'class' => 'form-control'
            )
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'cloudstorage_rackspace';
    }
}
