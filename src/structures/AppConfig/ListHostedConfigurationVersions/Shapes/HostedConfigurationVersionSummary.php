<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListHostedConfigurationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $ConfigurationProfileId
 * @property int|null $VersionNumber
 * @property string|null $Description
 * @property string|null $ContentType
 * @property string|null $VersionLabel
 * @property string|null $KmsKeyArn
 */
class HostedConfigurationVersionSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     ConfigurationProfileId?: string|null,
     *     VersionNumber?: int|null,
     *     Description?: string|null,
     *     ContentType?: string|null,
     *     VersionLabel?: string|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
