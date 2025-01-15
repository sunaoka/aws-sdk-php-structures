<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'|null $TableClass
 * @property \Aws\Api\DateTimeResult|null $LastUpdateDateTime
 */
class TableClassSummary extends Shape
{
    /**
     * @param array{
     *     TableClass?: 'STANDARD'|'STANDARD_INFREQUENT_ACCESS'|null,
     *     LastUpdateDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
