<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLFTagExpression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $CatalogId
 * @property list<Shapes\LFTag> $Expression
 */
class CreateLFTagExpressionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     CatalogId?: string|null,
     *     Expression: list<Shapes\LFTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
