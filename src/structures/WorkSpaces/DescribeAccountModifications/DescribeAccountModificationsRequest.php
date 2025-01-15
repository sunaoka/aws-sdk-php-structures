<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeAccountModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class DescribeAccountModificationsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
