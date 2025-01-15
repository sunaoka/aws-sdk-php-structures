<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPrincipalsForPortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PortfolioId
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 */
class ListPrincipalsForPortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PortfolioId: string,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
