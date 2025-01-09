<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $AliasPrefix
 * @property 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE' $Type
 */
class ListContactsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     AliasPrefix?: string,
     *     Type?: 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
