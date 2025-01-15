<?php

namespace Sunaoka\Aws\Structures\AppSync\ListSourceApiAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $associationId
 * @property string|null $associationArn
 * @property string|null $sourceApiId
 * @property string|null $sourceApiArn
 * @property string|null $mergedApiId
 * @property string|null $mergedApiArn
 * @property string|null $description
 */
class SourceApiAssociationSummary extends Shape
{
    /**
     * @param array{
     *     associationId?: string|null,
     *     associationArn?: string|null,
     *     sourceApiId?: string|null,
     *     sourceApiArn?: string|null,
     *     mergedApiId?: string|null,
     *     mergedApiArn?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
