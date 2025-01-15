<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPortfolios;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $PageToken
 * @property int<0, 100>|null $PageSize
 */
class ListPortfoliosRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PageToken?: string|null,
     *     PageSize?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
