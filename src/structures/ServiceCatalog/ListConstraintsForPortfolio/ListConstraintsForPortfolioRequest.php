<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListConstraintsForPortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PortfolioId
 * @property string $ProductId
 * @property int $PageSize
 * @property string $PageToken
 */
class ListConstraintsForPortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PortfolioId: string,
     *     ProductId?: string,
     *     PageSize?: int,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
