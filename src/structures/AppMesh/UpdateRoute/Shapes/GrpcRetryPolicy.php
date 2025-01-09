<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'cancelled'|'deadline-exceeded'|'internal'|'resource-exhausted'|'unavailable'> $grpcRetryEvents
 * @property list<string> $httpRetryEvents
 * @property int $maxRetries
 * @property Duration $perRetryTimeout
 * @property list<'connection-error'> $tcpRetryEvents
 */
class GrpcRetryPolicy extends Shape
{
    /**
     * @param array{
     *     grpcRetryEvents?: list<'cancelled'|'deadline-exceeded'|'internal'|'resource-exhausted'|'unavailable'>,
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
