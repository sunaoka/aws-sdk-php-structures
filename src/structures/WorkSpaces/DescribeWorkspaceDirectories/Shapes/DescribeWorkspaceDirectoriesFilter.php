<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER_IDENTITY_TYPE'|'WORKSPACE_TYPE' $Name
 * @property list<string> $Values
 */
class DescribeWorkspaceDirectoriesFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'USER_IDENTITY_TYPE'|'WORKSPACE_TYPE',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
