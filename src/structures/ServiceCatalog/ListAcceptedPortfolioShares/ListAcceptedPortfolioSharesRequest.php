<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListAcceptedPortfolioShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PageToken
 * @property int $PageSize
 * @property 'IMPORTED'|'AWS_SERVICECATALOG'|'AWS_ORGANIZATIONS' $PortfolioShareType
 */
class ListAcceptedPortfolioSharesRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PageToken?: string,
     *     PageSize?: int,
     *     PortfolioShareType?: 'IMPORTED'|'AWS_SERVICECATALOG'|'AWS_ORGANIZATIONS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
