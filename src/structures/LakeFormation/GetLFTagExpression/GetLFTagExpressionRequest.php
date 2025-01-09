<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetLFTagExpression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $CatalogId
 */
class GetLFTagExpressionRequest extends Request
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
