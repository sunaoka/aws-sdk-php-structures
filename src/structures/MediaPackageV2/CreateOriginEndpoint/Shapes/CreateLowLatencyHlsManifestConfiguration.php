<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property string $ChildManifestName
 * @property ScteHls $ScteHls
 * @property StartTag $StartTag
 * @property int $ManifestWindowSeconds
 * @property int $ProgramDateTimeIntervalSeconds
 * @property FilterConfiguration $FilterConfiguration
 */
class CreateLowLatencyHlsManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     ChildManifestName?: string,
     *     ScteHls?: ScteHls,
     *     StartTag?: StartTag,
     *     ManifestWindowSeconds?: int,
     *     ProgramDateTimeIntervalSeconds?: int,
     *     FilterConfiguration?: FilterConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
