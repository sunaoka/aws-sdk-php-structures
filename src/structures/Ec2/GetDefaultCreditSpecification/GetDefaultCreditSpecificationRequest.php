<?php

namespace Sunaoka\Aws\Structures\Ec2\GetDefaultCreditSpecification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property 't2'|'t3'|'t3a'|'t4g' $InstanceFamily
 */
class GetDefaultCreditSpecificationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceFamily: 't2'|'t3'|'t3a'|'t4g'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
