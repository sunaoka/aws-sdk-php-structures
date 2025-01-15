<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetAutoMergingPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECENCY'|'SOURCE' $ConflictResolvingModel
 * @property string|null $SourceName
 */
class ConflictResolution extends Shape
{
    /**
     * @param array{
     *     ConflictResolvingModel: 'RECENCY'|'SOURCE',
     *     SourceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
