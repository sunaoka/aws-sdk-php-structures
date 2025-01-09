<?php

namespace Sunaoka\Aws\Structures\Sns\SetSubscriptionAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionArn
 * @property string $AttributeName
 * @property string $AttributeValue
 */
class SetSubscriptionAttributesRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionArn: string,
     *     AttributeName: string,
     *     AttributeValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
