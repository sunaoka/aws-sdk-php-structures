<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShareStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SuccessfulShares
 * @property list<ShareError> $ShareErrors
 */
class ShareDetails extends Shape
{
    /**
     * @param array{
     *     SuccessfulShares?: list<string>,
     *     ShareErrors?: list<ShareError>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
