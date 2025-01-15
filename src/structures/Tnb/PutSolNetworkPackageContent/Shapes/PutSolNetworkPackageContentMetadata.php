<?php

namespace Sunaoka\Aws\Structures\Tnb\PutSolNetworkPackageContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkArtifactMeta|null $nsd
 */
class PutSolNetworkPackageContentMetadata extends Shape
{
    /**
     * @param array{nsd?: NetworkArtifactMeta|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
