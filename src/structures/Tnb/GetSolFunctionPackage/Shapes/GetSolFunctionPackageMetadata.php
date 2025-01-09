<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastModified
 * @property FunctionArtifactMeta $vnfd
 */
class GetSolFunctionPackageMetadata extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastModified: \Aws\Api\DateTimeResult,
     *     vnfd?: FunctionArtifactMeta
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
