<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceBundles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $BundleIds
 * @property string|null $Owner
 * @property string|null $NextToken
 */
class DescribeWorkspaceBundlesRequest extends Request
{
    /**
     * @param array{
     *     BundleIds?: list<string>|null,
     *     Owner?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
