<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $httpRetryEvents
 * @property int $maxRetries
 * @property Duration $perRetryTimeout
 * @property list<'connection-error'> $tcpRetryEvents
 */
class HttpRetryPolicy extends Shape
{
    /**
     * @param array{
     *     httpRetryEvents?: list<string>,
     *     maxRetries: int,
     *     perRetryTimeout: Duration,
     *     tcpRetryEvents?: list<'connection-error'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
