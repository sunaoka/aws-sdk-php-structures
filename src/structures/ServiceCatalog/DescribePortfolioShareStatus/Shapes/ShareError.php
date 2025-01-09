<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShareStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Accounts
 * @property string $Message
 * @property string $Error
 */
class ShareError extends Shape
{
    /**
     * @param array{
     *     Accounts?: list<string>,
     *     Message?: string,
     *     Error?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
