<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCreditSpecification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ClientToken
 * @property list<Shapes\InstanceCreditSpecificationRequest> $InstanceCreditSpecifications
 */
class ModifyInstanceCreditSpecificationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     InstanceCreditSpecifications: list<Shapes\InstanceCreditSpecificationRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
