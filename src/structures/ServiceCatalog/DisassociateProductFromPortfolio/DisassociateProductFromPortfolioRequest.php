<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisassociateProductFromPortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProductId
 * @property string $PortfolioId
 */
class DisassociateProductFromPortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProductId: string,
     *     PortfolioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
