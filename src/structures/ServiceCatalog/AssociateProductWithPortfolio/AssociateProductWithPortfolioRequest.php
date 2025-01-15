<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AssociateProductWithPortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $ProductId
 * @property string $PortfolioId
 * @property string|null $SourcePortfolioId
 */
class AssociateProductWithPortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProductId: string,
     *     PortfolioId: string,
     *     SourcePortfolioId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
