<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPortfolios;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PageToken
 * @property int<0, 100> $PageSize
 */
class ListPortfoliosRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PageToken?: string,
     *     PageSize?: int<0, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
