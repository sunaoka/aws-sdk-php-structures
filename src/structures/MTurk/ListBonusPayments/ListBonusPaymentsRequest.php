<?php

namespace Sunaoka\Aws\Structures\MTurk\ListBonusPayments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HITId
 * @property string|null $AssignmentId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListBonusPaymentsRequest extends Request
{
    /**
     * @param array{
     *     HITId?: string|null,
     *     AssignmentId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
