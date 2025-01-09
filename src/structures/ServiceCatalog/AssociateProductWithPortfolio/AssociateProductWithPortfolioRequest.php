<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AssociateProductWithPortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProductId
 * @property string $PortfolioId
 * @property string $SourcePortfolioId
 */
class AssociateProductWithPortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProductId: string,
     *     PortfolioId: string,
     *     SourcePortfolioId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
