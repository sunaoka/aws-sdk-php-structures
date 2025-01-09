<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineExpression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\Expression $Expression
 */
class DefineExpressionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Expression: Shapes\Expression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
