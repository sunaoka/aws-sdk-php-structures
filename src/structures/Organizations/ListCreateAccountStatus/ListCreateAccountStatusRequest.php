<?php

namespace Sunaoka\Aws\Structures\Organizations\ListCreateAccountStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'IN_PROGRESS'|'SUCCEEDED'|'FAILED'>|null $States
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListCreateAccountStatusRequest extends Request
{
    /**
     * @param array{
     *     States?: list<'IN_PROGRESS'|'SUCCEEDED'|'FAILED'>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
