<?php

namespace Sunaoka\Aws\Structures\Ec2\ValidateSecurityGroupQuotasForInterface;

trait ValidateSecurityGroupQuotasForInterfaceTrait
{
    /**
     * @param ValidateSecurityGroupQuotasForInterfaceRequest $args
     * @return ValidateSecurityGroupQuotasForInterfaceResponse
     */
    public function validateSecurityGroupQuotasForInterface(ValidateSecurityGroupQuotasForInterfaceRequest $args)
    {
        $result = parent::validateSecurityGroupQuotasForInterface($args->toArray());
        return new ValidateSecurityGroupQuotasForInterfaceResponse($result->toArray());
    }
}
