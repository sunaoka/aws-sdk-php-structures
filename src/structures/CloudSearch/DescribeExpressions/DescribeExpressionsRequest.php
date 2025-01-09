<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeExpressions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<string> $ExpressionNames
 * @property bool $Deployed
 */
class DescribeExpressionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ExpressionNames?: list<string>,
     *     Deployed?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
