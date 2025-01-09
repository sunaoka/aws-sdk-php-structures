<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLFTagExpression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $CatalogId
 */
class DeleteLFTagExpressionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     CatalogId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
