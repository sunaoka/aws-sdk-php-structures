<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceBundles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $BundleIds
 * @property string $Owner
 * @property string $NextToken
 */
class DescribeWorkspaceBundlesRequest extends Request
{
    /**
     * @param array{
     *     BundleIds?: list<string>,
     *     Owner?: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
