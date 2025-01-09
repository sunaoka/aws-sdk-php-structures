<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyAddressAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AllocationId
 * @property string $DomainName
 * @property bool $DryRun
 */
class ModifyAddressAttributeRequest extends Request
{
    /**
     * @param array{
     *     AllocationId: string,
     *     DomainName?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
