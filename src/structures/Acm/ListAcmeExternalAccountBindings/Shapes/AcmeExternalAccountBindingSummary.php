<?php

namespace Sunaoka\Aws\Structures\Acm\ListAcmeExternalAccountBindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AcmeExternalAccountBindingArn
 * @property string|null $AcmeEndpointArn
 * @property string|null $RoleArn
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property \Aws\Api\DateTimeResult|null $RevokedAt
 * @property \Aws\Api\DateTimeResult|null $LastUsedAt
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class AcmeExternalAccountBindingSummary extends Shape
{
    /**
     * @param array{
     *     AcmeExternalAccountBindingArn?: string|null,
     *     AcmeEndpointArn?: string|null,
     *     RoleArn?: string|null,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     RevokedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUsedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
