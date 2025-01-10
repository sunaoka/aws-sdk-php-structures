<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateHostedConfigurationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property string $Description
 * @property string|resource|\Psr\Http\Message\StreamInterface $Content
 * @property string $ContentType
 * @property int $LatestVersionNumber
 * @property string $VersionLabel
 */
class CreateHostedConfigurationVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ConfigurationProfileId: string,
     *     Description?: string,
     *     Content: string|resource|\Psr\Http\Message\StreamInterface,
     *     ContentType: string,
     *     LatestVersionNumber?: int,
     *     VersionLabel?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
