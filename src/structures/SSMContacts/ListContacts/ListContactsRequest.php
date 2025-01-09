<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<0, 1024> $MaxResults
 * @property string $AliasPrefix
 * @property 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE' $Type
 */
class ListContactsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<0, 1024>,
     *     AliasPrefix?: string,
     *     Type?: 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
