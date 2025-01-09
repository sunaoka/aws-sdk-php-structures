<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroupReferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $GroupId
 */
class DescribeSecurityGroupReferencesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     GroupId: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
