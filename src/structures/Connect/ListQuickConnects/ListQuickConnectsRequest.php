<?php

namespace Sunaoka\Aws\Structures\Connect\ListQuickConnects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<'USER'|'QUEUE'|'PHONE_NUMBER'> $QuickConnectTypes
 */
class ListQuickConnectsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     QuickConnectTypes?: list<'USER'|'QUEUE'|'PHONE_NUMBER'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
