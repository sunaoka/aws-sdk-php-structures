<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCreditSpecification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property list<Shapes\InstanceCreditSpecificationRequest> $InstanceCreditSpecifications
 */
class ModifyInstanceCreditSpecificationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     InstanceCreditSpecifications: list<Shapes\InstanceCreditSpecificationRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
