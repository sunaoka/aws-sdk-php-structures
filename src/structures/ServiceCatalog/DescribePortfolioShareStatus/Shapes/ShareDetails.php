<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShareStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SuccessfulShares
 * @property list<ShareError>|null $ShareErrors
 */
class ShareDetails extends Shape
{
    /**
     * @param array{
     *     SuccessfulShares?: list<string>|null,
     *     ShareErrors?: list<ShareError>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
