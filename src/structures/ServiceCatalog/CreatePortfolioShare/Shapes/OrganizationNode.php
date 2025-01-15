<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreatePortfolioShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ACCOUNT'|null $Type
 * @property string|null $Value
 */
class OrganizationNode extends Shape
{
    /**
     * @param array{
     *     Type?: 'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ACCOUNT'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
