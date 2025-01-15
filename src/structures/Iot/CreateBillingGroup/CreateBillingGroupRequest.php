<?php

namespace Sunaoka\Aws\Structures\Iot\CreateBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingGroupName
 * @property Shapes\BillingGroupProperties|null $billingGroupProperties
 * @property list<Shapes\Tag>|null $tags
 */
class CreateBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     billingGroupName: string,
     *     billingGroupProperties?: Shapes\BillingGroupProperties|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
