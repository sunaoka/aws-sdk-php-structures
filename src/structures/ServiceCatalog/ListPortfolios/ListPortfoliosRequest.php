<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPortfolios;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PageToken
 * @property int $PageSize
 */
class ListPortfoliosRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PageToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
