<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetHostedConfigurationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property int $VersionNumber
 */
class GetHostedConfigurationVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ConfigurationProfileId: string,
     *     VersionNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
