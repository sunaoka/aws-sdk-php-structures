<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $ServiceAccountSecretArn
 */
class ActiveDirectoryConfig extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     ServiceAccountSecretArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
