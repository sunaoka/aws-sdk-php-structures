<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLFTagExpressions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $CatalogId
 * @property list<LFTag> $Expression
 */
class LFTagExpression extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     CatalogId?: string,
     *     Expression?: list<LFTag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
