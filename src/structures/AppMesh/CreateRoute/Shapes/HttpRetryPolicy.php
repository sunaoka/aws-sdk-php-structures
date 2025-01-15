<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $httpRetryEvents
 * @property int<0, max> $maxRetries
 * @property Duration $perRetryTimeout
 * @property list<'connection-error'>|null $tcpRetryEvents
 */
class HttpRetryPolicy extends Shape
{
    /**
     * @param array{
     *     httpRetryEvents?: list<string>|null,
     *     maxRetries: int<0, max>,
     *     perRetryTimeout: Duration,
     *     tcpRetryEvents?: list<'connection-error'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
