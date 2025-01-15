<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListAcceptedPortfolioShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $PageToken
 * @property int<0, 100>|null $PageSize
 * @property 'IMPORTED'|'AWS_SERVICECATALOG'|'AWS_ORGANIZATIONS'|null $PortfolioShareType
 */
class ListAcceptedPortfolioSharesRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PageToken?: string|null,
     *     PageSize?: int<0, 100>|null,
     *     PortfolioShareType?: 'IMPORTED'|'AWS_SERVICECATALOG'|'AWS_ORGANIZATIONS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
