<?php

namespace Sunaoka\Aws\Structures\Ec2\ValidateSecurityGroupQuotasForInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $SecurityGroupIds
 * @property bool|null $DryRun
 */
class ValidateSecurityGroupQuotasForInterfaceRequest extends Request
{
    /**
     * @param array{
     *     SecurityGroupIds: list<string>,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
