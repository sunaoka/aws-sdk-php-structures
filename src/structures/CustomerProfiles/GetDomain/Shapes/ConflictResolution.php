<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECENCY'|'SOURCE' $ConflictResolvingModel
 * @property string $SourceName
 */
class ConflictResolution extends Shape
{
    /**
     * @param array{
     *     ConflictResolvingModel: 'RECENCY'|'SOURCE',
     *     SourceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
