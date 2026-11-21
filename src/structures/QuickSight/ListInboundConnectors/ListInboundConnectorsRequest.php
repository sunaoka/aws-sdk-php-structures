<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListInboundConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<'QUICK_DESKTOP'>|null $Type
 */
class ListInboundConnectorsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Type?: list<'QUICK_DESKTOP'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
