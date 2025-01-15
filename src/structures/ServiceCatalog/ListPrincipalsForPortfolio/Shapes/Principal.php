<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPrincipalsForPortfolio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrincipalARN
 * @property 'IAM'|'IAM_PATTERN'|null $PrincipalType
 */
class Principal extends Shape
{
    /**
     * @param array{
     *     PrincipalARN?: string|null,
     *     PrincipalType?: 'IAM'|'IAM_PATTERN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
