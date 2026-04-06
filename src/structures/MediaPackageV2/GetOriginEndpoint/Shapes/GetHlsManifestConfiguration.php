<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property string $Url
 * @property string|null $ChildManifestName
 * @property int|null $ManifestWindowSeconds
 * @property int|null $ProgramDateTimeIntervalSeconds
 * @property ScteHls|null $ScteHls
 */
class GetHlsManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     Url: string,
     *     ChildManifestName?: string|null,
     *     ManifestWindowSeconds?: int|null,
     *     ProgramDateTimeIntervalSeconds?: int|null,
     *     ScteHls?: ScteHls|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
