<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property bool|null $RetainStacksOnAccountRemoval
 * @property list<string>|null $DependsOn
 */
class AutoDeployment extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     RetainStacksOnAccountRemoval?: bool|null,
     *     DependsOn?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
