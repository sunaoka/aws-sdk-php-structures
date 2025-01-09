<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListHostedConfigurationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationProfileId
 * @property int $VersionNumber
 * @property string $Description
 * @property string $ContentType
 * @property string $VersionLabel
 * @property string $KmsKeyArn
 */
class HostedConfigurationVersionSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     ConfigurationProfileId?: string,
     *     VersionNumber?: int,
     *     Description?: string,
     *     ContentType?: string,
     *     VersionLabel?: string,
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
