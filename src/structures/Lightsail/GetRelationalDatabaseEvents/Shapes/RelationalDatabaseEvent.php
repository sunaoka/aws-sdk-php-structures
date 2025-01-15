<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resource
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $message
 * @property list<string>|null $eventCategories
 */
class RelationalDatabaseEvent extends Shape
{
    /**
     * @param array{
     *     resource?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     message?: string|null,
     *     eventCategories?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
