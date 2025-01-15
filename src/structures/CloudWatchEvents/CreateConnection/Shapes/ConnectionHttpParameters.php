<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConnectionHeaderParameter>|null $HeaderParameters
 * @property list<ConnectionQueryStringParameter>|null $QueryStringParameters
 * @property list<ConnectionBodyParameter>|null $BodyParameters
 */
class ConnectionHttpParameters extends Shape
{
    /**
     * @param array{
     *     HeaderParameters?: list<ConnectionHeaderParameter>|null,
     *     QueryStringParameters?: list<ConnectionQueryStringParameter>|null,
     *     BodyParameters?: list<ConnectionBodyParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
