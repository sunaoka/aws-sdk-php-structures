<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListAcceptedPortfolioShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PageToken
 * @property int<0, 100> $PageSize
 * @property 'IMPORTED'|'AWS_SERVICECATALOG'|'AWS_ORGANIZATIONS' $PortfolioShareType
 */
class ListAcceptedPortfolioSharesRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PageToken?: string,
     *     PageSize?: int<0, 100>,
     *     PortfolioShareType?: 'IMPORTED'|'AWS_SERVICECATALOG'|'AWS_ORGANIZATIONS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
