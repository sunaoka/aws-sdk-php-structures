<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListConstraintsForPortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PortfolioId
 * @property string $ProductId
 * @property int<0, 20> $PageSize
 * @property string $PageToken
 */
class ListConstraintsForPortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PortfolioId: string,
     *     ProductId?: string,
     *     PageSize?: int<0, 20>,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
