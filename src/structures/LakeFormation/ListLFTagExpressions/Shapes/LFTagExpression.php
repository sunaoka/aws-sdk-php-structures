<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLFTagExpressions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $CatalogId
 * @property list<LFTag>|null $Expression
 */
class LFTagExpression extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     CatalogId?: string|null,
     *     Expression?: list<LFTag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
