<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionName
 * @property string $ConnectionArn
 * @property 'GITHUB'|'BITBUCKET' $ProviderType
 * @property 'PENDING_HANDSHAKE'|'AVAILABLE'|'ERROR'|'DELETED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class ConnectionSummary extends Shape
{
    /**
     * @param array{
     *     ConnectionName?: string,
     *     ConnectionArn?: string,
     *     ProviderType?: 'GITHUB'|'BITBUCKET',
     *     Status?: 'PENDING_HANDSHAKE'|'AVAILABLE'|'ERROR'|'DELETED',
     *     CreatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
