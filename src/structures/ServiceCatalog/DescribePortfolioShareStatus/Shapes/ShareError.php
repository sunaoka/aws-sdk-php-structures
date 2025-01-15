<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShareStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Accounts
 * @property string|null $Message
 * @property string|null $Error
 */
class ShareError extends Shape
{
    /**
     * @param array{
     *     Accounts?: list<string>|null,
     *     Message?: string|null,
     *     Error?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
