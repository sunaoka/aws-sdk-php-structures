<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListInboundConnectorApplicationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $InboundConnectorId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListInboundConnectorApplicationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     InboundConnectorId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
