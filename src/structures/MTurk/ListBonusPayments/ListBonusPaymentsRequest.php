<?php

namespace Sunaoka\Aws\Structures\MTurk\ListBonusPayments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 * @property string $AssignmentId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListBonusPaymentsRequest extends Request
{
    /**
     * @param array{
     *     HITId?: string,
     *     AssignmentId?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
