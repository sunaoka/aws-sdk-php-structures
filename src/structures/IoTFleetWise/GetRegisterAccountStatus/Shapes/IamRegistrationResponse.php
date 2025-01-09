<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetRegisterAccountStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property 'REGISTRATION_PENDING'|'REGISTRATION_SUCCESS'|'REGISTRATION_FAILURE' $registrationStatus
 * @property string $errorMessage
 */
class IamRegistrationResponse extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     registrationStatus: 'REGISTRATION_PENDING'|'REGISTRATION_SUCCESS'|'REGISTRATION_FAILURE',
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
