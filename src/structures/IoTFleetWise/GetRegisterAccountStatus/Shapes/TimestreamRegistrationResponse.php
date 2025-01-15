<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetRegisterAccountStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timestreamDatabaseName
 * @property string $timestreamTableName
 * @property string|null $timestreamDatabaseArn
 * @property string|null $timestreamTableArn
 * @property 'REGISTRATION_PENDING'|'REGISTRATION_SUCCESS'|'REGISTRATION_FAILURE' $registrationStatus
 * @property string|null $errorMessage
 */
class TimestreamRegistrationResponse extends Shape
{
    /**
     * @param array{
     *     timestreamDatabaseName: string,
     *     timestreamTableName: string,
     *     timestreamDatabaseArn?: string|null,
     *     timestreamTableArn?: string|null,
     *     registrationStatus: 'REGISTRATION_PENDING'|'REGISTRATION_SUCCESS'|'REGISTRATION_FAILURE',
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
