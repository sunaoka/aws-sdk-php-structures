<?php

namespace Sunaoka\Aws\Structures\AppSync\ListSourceApiAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $associationId
 * @property string $associationArn
 * @property string $sourceApiId
 * @property string $sourceApiArn
 * @property string $mergedApiId
 * @property string $mergedApiArn
 * @property string $description
 */
class SourceApiAssociationSummary extends Shape
{
    /**
     * @param array{
     *     associationId?: string,
     *     associationArn?: string,
     *     sourceApiId?: string,
     *     sourceApiArn?: string,
     *     mergedApiId?: string,
     *     mergedApiArn?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
