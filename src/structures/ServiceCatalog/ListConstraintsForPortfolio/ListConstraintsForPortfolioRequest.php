<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListConstraintsForPortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PortfolioId
 * @property string|null $ProductId
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 */
class ListConstraintsForPortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PortfolioId: string,
     *     ProductId?: string|null,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
