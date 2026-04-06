<?php

namespace Sunaoka\Aws\Structures\CodeStar\DescribeProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DescribeProjectRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
