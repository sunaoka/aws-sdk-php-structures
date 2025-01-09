<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $message
 * @property list<string> $eventCategories
 */
class RelationalDatabaseEvent extends Shape
{
    /**
     * @param array{
     *     resource?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     message?: string,
     *     eventCategories?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
