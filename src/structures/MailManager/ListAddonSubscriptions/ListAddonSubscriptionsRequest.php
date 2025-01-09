<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddonSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 50> $PageSize
 */
class ListAddonSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
