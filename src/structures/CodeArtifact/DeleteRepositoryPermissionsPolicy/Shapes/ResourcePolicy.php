<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeleteRepositoryPermissionsPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property string $revision
 * @property string $document
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string,
     *     revision?: string,
     *     document?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
