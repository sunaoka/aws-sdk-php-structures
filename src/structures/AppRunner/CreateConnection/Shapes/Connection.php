<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionName
 * @property string|null $ConnectionArn
 * @property 'GITHUB'|'BITBUCKET'|null $ProviderType
 * @property 'PENDING_HANDSHAKE'|'AVAILABLE'|'ERROR'|'DELETED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     ConnectionName?: string|null,
     *     ConnectionArn?: string|null,
     *     ProviderType?: 'GITHUB'|'BITBUCKET'|null,
     *     Status?: 'PENDING_HANDSHAKE'|'AVAILABLE'|'ERROR'|'DELETED'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
