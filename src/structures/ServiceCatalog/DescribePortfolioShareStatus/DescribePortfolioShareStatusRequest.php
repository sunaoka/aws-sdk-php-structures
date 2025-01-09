<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShareStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortfolioShareToken
 */
class DescribePortfolioShareStatusRequest extends Request
{
    /**
     * @param array{PortfolioShareToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
