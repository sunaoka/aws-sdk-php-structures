<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $Id
 */
class DescribePortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
