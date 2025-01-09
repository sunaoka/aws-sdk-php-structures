<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DefaultAction
 * @property list<AwsWafWebAclRule> $Rules
 * @property string $WebAclId
 */
class AwsWafWebAclDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     DefaultAction?: string,
     *     Rules?: list<AwsWafWebAclRule>,
     *     WebAclId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
