<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLFTagExpression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $CatalogId
 * @property list<Shapes\LFTag> $Expression
 */
class CreateLFTagExpressionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     CatalogId?: string,
     *     Expression: list<Shapes\LFTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
