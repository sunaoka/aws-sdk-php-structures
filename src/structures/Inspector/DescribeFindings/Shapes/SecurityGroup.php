<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupName
 * @property string|null $groupId
 */
class SecurityGroup extends Shape
{
    /**
     * @param array{
     *     groupName?: string|null,
     *     groupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
