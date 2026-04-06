<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetAccessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'BILLING_TOKEN'|null $Type
 * @property string|null $BillingToken
 * @property 'AVAILABLE'|'PENDING_DELETION'|'DELETED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $Arn
 * @property array<string, string>|null $Tags
 */
class Accessor extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: 'BILLING_TOKEN'|null,
     *     BillingToken?: string|null,
     *     Status?: 'AVAILABLE'|'PENDING_DELETION'|'DELETED'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Arn?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
