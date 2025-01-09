<?php

namespace Sunaoka\Aws\Structures\AppConfig\ValidateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property string $ConfigurationVersion
 */
class ValidateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ConfigurationProfileId: string,
     *     ConfigurationVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
