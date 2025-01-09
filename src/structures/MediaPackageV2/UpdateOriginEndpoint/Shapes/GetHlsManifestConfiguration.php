<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property string $Url
 * @property string $ChildManifestName
 * @property int $ManifestWindowSeconds
 * @property int $ProgramDateTimeIntervalSeconds
 * @property ScteHls $ScteHls
 * @property FilterConfiguration $FilterConfiguration
 * @property StartTag $StartTag
 */
class GetHlsManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     Url: string,
     *     ChildManifestName?: string,
     *     ManifestWindowSeconds?: int,
     *     ProgramDateTimeIntervalSeconds?: int,
     *     ScteHls?: ScteHls,
     *     FilterConfiguration?: FilterConfiguration,
     *     StartTag?: StartTag
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
