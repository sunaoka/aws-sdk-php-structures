<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PutDomainPermissionsPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceArn
 * @property string|null $revision
 * @property string|null $document
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string|null,
     *     revision?: string|null,
     *     document?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
