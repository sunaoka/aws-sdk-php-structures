<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateInstanceAccessControlAttributeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property Shapes\InstanceAccessControlAttributeConfiguration $InstanceAccessControlAttributeConfiguration
 */
class CreateInstanceAccessControlAttributeConfigurationRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     InstanceAccessControlAttributeConfiguration: Shapes\InstanceAccessControlAttributeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
