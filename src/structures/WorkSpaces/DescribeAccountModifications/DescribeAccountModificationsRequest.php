<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeAccountModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class DescribeAccountModificationsRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
