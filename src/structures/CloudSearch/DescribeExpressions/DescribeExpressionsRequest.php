<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeExpressions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<string>|null $ExpressionNames
 * @property bool|null $Deployed
 */
class DescribeExpressionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ExpressionNames?: list<string>|null,
     *     Deployed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
