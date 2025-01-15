<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyAddressAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AllocationId
 * @property string|null $DomainName
 * @property bool|null $DryRun
 */
class ModifyAddressAttributeRequest extends Request
{
    /**
     * @param array{
     *     AllocationId: string,
     *     DomainName?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
