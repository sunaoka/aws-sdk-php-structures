<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteExpression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ExpressionName
 */
class DeleteExpressionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ExpressionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
