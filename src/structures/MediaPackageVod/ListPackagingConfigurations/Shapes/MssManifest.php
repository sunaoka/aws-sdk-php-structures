<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManifestName
 * @property StreamSelection|null $StreamSelection
 */
class MssManifest extends Shape
{
    /**
     * @param array{
     *     ManifestName?: string|null,
     *     StreamSelection?: StreamSelection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
