<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DeleteEnvironmentConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $EnvironmentName
 */
class DeleteEnvironmentConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     EnvironmentName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
