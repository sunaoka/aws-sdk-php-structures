<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateInstanceAccessControlAttributeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InstanceAccessControlAttributeConfiguration $InstanceAccessControlAttributeConfiguration
 * @property string $InstanceArn
 */
class CreateInstanceAccessControlAttributeConfigurationRequest extends Request
{
    /**
     * @param array{
     *     InstanceAccessControlAttributeConfiguration: Shapes\InstanceAccessControlAttributeConfiguration,
     *     InstanceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
