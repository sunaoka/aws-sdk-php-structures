<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 1024>|null $MaxResults
 * @property string|null $AliasPrefix
 * @property 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE'|null $Type
 */
class ListContactsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1024>|null,
     *     AliasPrefix?: string|null,
     *     Type?: 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
