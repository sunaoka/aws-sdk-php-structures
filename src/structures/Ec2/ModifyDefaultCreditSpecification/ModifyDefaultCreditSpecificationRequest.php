<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyDefaultCreditSpecification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property 't2'|'t3'|'t3a'|'t4g' $InstanceFamily
 * @property string $CpuCredits
 */
class ModifyDefaultCreditSpecificationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceFamily: 't2'|'t3'|'t3a'|'t4g',
     *     CpuCredits: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
