<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $DefaultAction
 * @property list<AwsWafWebAclRule>|null $Rules
 * @property string|null $WebAclId
 */
class AwsWafWebAclDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     DefaultAction?: string|null,
     *     Rules?: list<AwsWafWebAclRule>|null,
     *     WebAclId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
