<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetRegisterAccountStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $customerAccountId
 * @property 'REGISTRATION_PENDING'|'REGISTRATION_SUCCESS'|'REGISTRATION_FAILURE' $accountStatus
 * @property Shapes\TimestreamRegistrationResponse $timestreamRegistrationResponse
 * @property Shapes\IamRegistrationResponse $iamRegistrationResponse
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class GetRegisterAccountStatusResponse extends Response
{
}
