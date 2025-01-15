<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListPartnerEventSourceAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Account
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property 'PENDING'|'ACTIVE'|'DELETED'|null $State
 */
class PartnerEventSourceAccount extends Shape
{
    /**
     * @param array{
     *     Account?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'PENDING'|'ACTIVE'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
