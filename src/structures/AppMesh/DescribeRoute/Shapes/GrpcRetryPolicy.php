<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'cancelled'|'deadline-exceeded'|'internal'|'resource-exhausted'|'unavailable'>|null $grpcRetryEvents
 * @property list<string>|null $httpRetryEvents
 * @property int<0, max> $maxRetries
 * @property Duration $perRetryTimeout
 * @property list<'connection-error'>|null $tcpRetryEvents
 */
class GrpcRetryPolicy extends Shape
{
    /**
     * @param array{
     *     grpcRetryEvents?: list<'cancelled'|'deadline-exceeded'|'internal'|'resource-exhausted'|'unavailable'>|null,
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
