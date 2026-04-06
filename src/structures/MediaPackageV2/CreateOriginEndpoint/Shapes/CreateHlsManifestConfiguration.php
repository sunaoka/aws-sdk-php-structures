<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property string|null $ChildManifestName
 * @property ScteHls|null $ScteHls
 * @property int<30, max>|null $ManifestWindowSeconds
 * @property int<1, 1209600>|null $ProgramDateTimeIntervalSeconds
 * @property FilterConfiguration|null $FilterConfiguration
 */
class CreateHlsManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     ChildManifestName?: string|null,
     *     ScteHls?: ScteHls|null,
     *     ManifestWindowSeconds?: int<30, max>|null,
     *     ProgramDateTimeIntervalSeconds?: int<1, 1209600>|null,
     *     FilterConfiguration?: FilterConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
