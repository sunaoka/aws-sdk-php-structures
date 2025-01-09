<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPortfoliosForProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProductId
 * @property string $PageToken
 * @property int<0, 100> $PageSize
 */
class ListPortfoliosForProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProductId: string,
     *     PageToken?: string,
     *     PageSize?: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
