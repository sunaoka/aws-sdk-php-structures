<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE'|null $KeyState
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     KeyState?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
