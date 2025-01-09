<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListAccountAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $BillingGroupArn
 * @property string $AccountName
 * @property string $AccountEmail
 */
class AccountAssociationsListElement extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     BillingGroupArn?: string,
     *     AccountName?: string,
     *     AccountEmail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
