<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Application
 * @property string $Environment
 * @property string $Configuration
 * @property string $ClientId
 * @property string|null $ClientConfigurationVersion
 */
class GetConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Application: string,
     *     Environment: string,
     *     Configuration: string,
     *     ClientId: string,
     *     ClientConfigurationVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
