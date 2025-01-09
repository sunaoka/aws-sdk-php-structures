<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListConstraintsForPortfolio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConstraintId
 * @property string $Type
 * @property string $Description
 * @property string $Owner
 * @property string $ProductId
 * @property string $PortfolioId
 */
class ConstraintDetail extends Shape
{
    /**
     * @param array{
     *     ConstraintId?: string,
     *     Type?: string,
     *     Description?: string,
     *     Owner?: string,
     *     ProductId?: string,
     *     PortfolioId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
