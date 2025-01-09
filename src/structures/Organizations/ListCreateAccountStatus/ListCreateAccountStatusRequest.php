<?php

namespace Sunaoka\Aws\Structures\Organizations\ListCreateAccountStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'IN_PROGRESS'|'SUCCEEDED'|'FAILED'> $States
 * @property string $NextToken
 * @property int<1, 20> $MaxResults
 */
class ListCreateAccountStatusRequest extends Request
{
    /**
     * @param array{
     *     States?: list<'IN_PROGRESS'|'SUCCEEDED'|'FAILED'>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 20>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
