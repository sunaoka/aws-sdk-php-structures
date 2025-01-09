<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConnectionHeaderParameter> $HeaderParameters
 * @property list<ConnectionQueryStringParameter> $QueryStringParameters
 * @property list<ConnectionBodyParameter> $BodyParameters
 */
class ConnectionHttpParameters extends Shape
{
    /**
     * @param array{
     *     HeaderParameters?: list<ConnectionHeaderParameter>,
     *     QueryStringParameters?: list<ConnectionQueryStringParameter>,
     *     BodyParameters?: list<ConnectionBodyParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
