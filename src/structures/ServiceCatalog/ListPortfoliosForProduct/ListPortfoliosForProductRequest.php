<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPortfoliosForProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $ProductId
 * @property string|null $PageToken
 * @property int<0, 100>|null $PageSize
 */
class ListPortfoliosForProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProductId: string,
     *     PageToken?: string|null,
     *     PageSize?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
