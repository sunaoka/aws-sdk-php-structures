<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListPartnerEventSourceAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Account
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $ExpirationTime
 * @property 'PENDING'|'ACTIVE'|'DELETED' $State
 */
class PartnerEventSourceAccount extends Shape
{
    /**
     * @param array{
     *     Account?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     ExpirationTime?: \Aws\Api\DateTimeResult,
     *     State?: 'PENDING'|'ACTIVE'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
