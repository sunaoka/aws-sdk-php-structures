<?php

namespace Sunaoka\Aws\Structures\Sns\ListSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class ListSubscriptionsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
