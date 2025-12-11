<?php

namespace Sunaoka\Aws\Structures\Organizations\ListOutboundResponsibilityTransfers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BILLING' $Type
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListOutboundResponsibilityTransfersRequest extends Request
{
    /**
     * @param array{
     *     Type: 'BILLING',
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
