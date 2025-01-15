<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrincipalId
 * @property 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ORGANIZATION_MEMBER_ACCOUNT'|null $Type
 * @property bool|null $Accepted
 * @property bool|null $ShareTagOptions
 * @property bool|null $SharePrincipals
 */
class PortfolioShareDetail extends Shape
{
    /**
     * @param array{
     *     PrincipalId?: string|null,
     *     Type?: 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ORGANIZATION_MEMBER_ACCOUNT'|null,
     *     Accepted?: bool|null,
     *     ShareTagOptions?: bool|null,
     *     SharePrincipals?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
