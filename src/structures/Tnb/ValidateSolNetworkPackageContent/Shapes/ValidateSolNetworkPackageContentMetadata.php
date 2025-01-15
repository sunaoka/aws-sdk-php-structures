<?php

namespace Sunaoka\Aws\Structures\Tnb\ValidateSolNetworkPackageContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkArtifactMeta|null $nsd
 */
class ValidateSolNetworkPackageContentMetadata extends Shape
{
    /**
     * @param array{nsd?: NetworkArtifactMeta|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
