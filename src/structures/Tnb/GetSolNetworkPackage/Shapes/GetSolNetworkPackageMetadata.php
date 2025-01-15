<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastModified
 * @property NetworkArtifactMeta|null $nsd
 */
class GetSolNetworkPackageMetadata extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastModified: \Aws\Api\DateTimeResult,
     *     nsd?: NetworkArtifactMeta|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
