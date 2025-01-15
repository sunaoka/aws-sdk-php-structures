<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetAddressAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AllocationId
 * @property 'domain-name' $Attribute
 * @property bool|null $DryRun
 */
class ResetAddressAttributeRequest extends Request
{
    /**
     * @param array{
     *     AllocationId: string,
     *     Attribute: 'domain-name',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
