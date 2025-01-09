<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE' $KeyState
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     KeyState?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
