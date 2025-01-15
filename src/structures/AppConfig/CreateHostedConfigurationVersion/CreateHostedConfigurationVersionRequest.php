<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateHostedConfigurationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property string|null $Description
 * @property string|resource|\Psr\Http\Message\StreamInterface $Content
 * @property string $ContentType
 * @property int|null $LatestVersionNumber
 * @property string|null $VersionLabel
 */
class CreateHostedConfigurationVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ConfigurationProfileId: string,
     *     Description?: string|null,
     *     Content: string|resource|\Psr\Http\Message\StreamInterface,
     *     ContentType: string,
     *     LatestVersionNumber?: int|null,
     *     VersionLabel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
