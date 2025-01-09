<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteHostedConfigurationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property int $VersionNumber
 */
class DeleteHostedConfigurationVersionRequest extends Request
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
