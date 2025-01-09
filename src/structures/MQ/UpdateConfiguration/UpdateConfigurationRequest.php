<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationId
 * @property string $Data
 * @property string $Description
 */
class UpdateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationId: string,
     *     Data: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
