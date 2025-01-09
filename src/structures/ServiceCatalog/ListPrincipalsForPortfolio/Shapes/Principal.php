<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPrincipalsForPortfolio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrincipalARN
 * @property 'IAM'|'IAM_PATTERN' $PrincipalType
 */
class Principal extends Shape
{
    /**
     * @param array{
     *     PrincipalARN?: string,
     *     PrincipalType?: 'IAM'|'IAM_PATTERN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
