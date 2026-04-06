<?php

namespace Sunaoka\Aws\Structures\Organizations\ListInboundResponsibilityTransfers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BILLING' $Type
 * @property string|null $Id
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListInboundResponsibilityTransfersRequest extends Request
{
    /**
     * @param array{
     *     Type: 'BILLING',
     *     Id?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
