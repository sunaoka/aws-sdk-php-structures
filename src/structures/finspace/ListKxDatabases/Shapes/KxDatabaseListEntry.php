<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $databaseName
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 */
class KxDatabaseListEntry extends Shape
{
    /**
     * @param array{
     *     databaseName?: string|null,
     *     createdTimestamp?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
