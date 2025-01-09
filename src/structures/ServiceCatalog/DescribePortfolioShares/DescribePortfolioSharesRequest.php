<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortfolioId
 * @property 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ORGANIZATION_MEMBER_ACCOUNT' $Type
 * @property string $PageToken
 * @property int $PageSize
 */
class DescribePortfolioSharesRequest extends Request
{
    /**
     * @param array{
     *     PortfolioId: string,
     *     Type: 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ORGANIZATION_MEMBER_ACCOUNT',
     *     PageToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
