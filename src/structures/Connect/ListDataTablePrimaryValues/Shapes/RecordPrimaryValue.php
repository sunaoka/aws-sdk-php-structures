<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTablePrimaryValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecordId
 * @property list<PrimaryValueResponse>|null $PrimaryValues
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class RecordPrimaryValue extends Shape
{
    /**
     * @param array{
     *     RecordId?: string|null,
     *     PrimaryValues?: list<PrimaryValueResponse>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
