<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property string $ChildManifestName
 * @property ScteHls $ScteHls
 * @property StartTag $StartTag
 * @property int<30, max> $ManifestWindowSeconds
 * @property int<1, 1209600> $ProgramDateTimeIntervalSeconds
 * @property FilterConfiguration $FilterConfiguration
 */
class CreateHlsManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     ChildManifestName?: string,
     *     ScteHls?: ScteHls,
     *     StartTag?: StartTag,
     *     ManifestWindowSeconds?: int<30, max>,
     *     ProgramDateTimeIntervalSeconds?: int<1, 1209600>,
     *     FilterConfiguration?: FilterConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
