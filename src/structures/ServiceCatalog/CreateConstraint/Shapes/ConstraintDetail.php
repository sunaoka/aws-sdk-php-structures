<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateConstraint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConstraintId
 * @property string|null $Type
 * @property string|null $Description
 * @property string|null $Owner
 * @property string|null $ProductId
 * @property string|null $PortfolioId
 */
class ConstraintDetail extends Shape
{
    /**
     * @param array{
     *     ConstraintId?: string|null,
     *     Type?: string|null,
     *     Description?: string|null,
     *     Owner?: string|null,
     *     ProductId?: string|null,
     *     PortfolioId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
