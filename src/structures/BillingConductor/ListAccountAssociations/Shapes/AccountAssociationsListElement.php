<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListAccountAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $BillingGroupArn
 * @property string|null $AccountName
 * @property string|null $AccountEmail
 */
class AccountAssociationsListElement extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     BillingGroupArn?: string|null,
     *     AccountName?: string|null,
     *     AccountEmail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
