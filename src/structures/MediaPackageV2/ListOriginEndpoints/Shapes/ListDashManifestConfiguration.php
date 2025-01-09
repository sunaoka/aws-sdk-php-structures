<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListOriginEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestName
 * @property string $Url
 */
class ListDashManifestConfiguration extends Shape
{
    /**
     * @param array{
     *     ManifestName: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
