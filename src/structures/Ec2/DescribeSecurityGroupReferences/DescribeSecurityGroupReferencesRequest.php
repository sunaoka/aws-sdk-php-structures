<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroupReferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string> $GroupId
 */
class DescribeSecurityGroupReferencesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     GroupId: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
