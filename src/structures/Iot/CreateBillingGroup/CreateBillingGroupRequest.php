<?php

namespace Sunaoka\Aws\Structures\Iot\CreateBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingGroupName
 * @property Shapes\BillingGroupProperties $billingGroupProperties
 * @property list<Shapes\Tag> $tags
 */
class CreateBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     billingGroupName: string,
     *     billingGroupProperties?: Shapes\BillingGroupProperties,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
