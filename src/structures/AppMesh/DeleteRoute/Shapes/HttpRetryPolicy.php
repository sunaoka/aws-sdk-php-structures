<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $httpRetryEvents
 * @property int<0, max> $maxRetries
 * @property Duration $perRetryTimeout
 * @property list<'connection-error'> $tcpRetryEvents
 */
class HttpRetryPolicy extends Shape
{
    /**
     * @param array{
     *     httpRetryEvents?: list<string>,
     *     maxRetries: int<0, max>,
     *     perRetryTimeout: Duration,
     *     tcpRetryEvents?: list<'connection-error'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
