<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortfolioId
 * @property 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ORGANIZATION_MEMBER_ACCOUNT' $Type
 * @property string|null $PageToken
 * @property int<0, 100>|null $PageSize
 */
class DescribePortfolioSharesRequest extends Request
{
    /**
     * @param array{
     *     PortfolioId: string,
     *     Type: 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ORGANIZATION_MEMBER_ACCOUNT',
     *     PageToken?: string|null,
     *     PageSize?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
