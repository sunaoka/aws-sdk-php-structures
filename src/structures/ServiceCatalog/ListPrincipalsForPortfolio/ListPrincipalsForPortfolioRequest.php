<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPrincipalsForPortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PortfolioId
 * @property int $PageSize
 * @property string $PageToken
 */
class ListPrincipalsForPortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PortfolioId: string,
     *     PageSize?: int,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
