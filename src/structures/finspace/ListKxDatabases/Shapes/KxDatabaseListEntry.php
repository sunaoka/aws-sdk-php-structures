<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseName
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 */
class KxDatabaseListEntry extends Shape
{
    /**
     * @param array{
     *     databaseName?: string,
     *     createdTimestamp?: \Aws\Api\DateTimeResult,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
