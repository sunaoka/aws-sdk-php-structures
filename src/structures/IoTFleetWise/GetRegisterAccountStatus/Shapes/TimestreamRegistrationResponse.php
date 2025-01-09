<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetRegisterAccountStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timestreamDatabaseName
 * @property string $timestreamTableName
 * @property string $timestreamDatabaseArn
 * @property string $timestreamTableArn
 * @property 'REGISTRATION_PENDING'|'REGISTRATION_SUCCESS'|'REGISTRATION_FAILURE' $registrationStatus
 * @property string $errorMessage
 */
class TimestreamRegistrationResponse extends Shape
{
    /**
     * @param array{
     *     timestreamDatabaseName: string,
     *     timestreamTableName: string,
     *     timestreamDatabaseArn?: string,
     *     timestreamTableArn?: string,
     *     registrationStatus: 'REGISTRATION_PENDING'|'REGISTRATION_SUCCESS'|'REGISTRATION_FAILURE',
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
