<?php

namespace Sunaoka\Aws\Structures\Connect\ListQuickConnects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property list<'USER'|'QUEUE'|'PHONE_NUMBER'|'FLOW'>|null $QuickConnectTypes
 */
class ListQuickConnectsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     QuickConnectTypes?: list<'USER'|'QUEUE'|'PHONE_NUMBER'|'FLOW'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
