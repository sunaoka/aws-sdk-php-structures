<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrincipalId
 * @property 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ORGANIZATION_MEMBER_ACCOUNT' $Type
 * @property bool $Accepted
 * @property bool $ShareTagOptions
 * @property bool $SharePrincipals
 */
class PortfolioShareDetail extends Shape
{
    /**
     * @param array{
     *     PrincipalId?: string,
     *     Type?: 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ORGANIZATION_MEMBER_ACCOUNT',
     *     Accepted?: bool,
     *     ShareTagOptions?: bool,
     *     SharePrincipals?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
