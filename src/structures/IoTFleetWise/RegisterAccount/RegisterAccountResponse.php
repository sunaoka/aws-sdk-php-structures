<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\RegisterAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'REGISTRATION_PENDING'|'REGISTRATION_SUCCESS'|'REGISTRATION_FAILURE' $registerAccountStatus
 * @property Shapes\TimestreamResources|null $timestreamResources
 * @property Shapes\IamResources $iamResources
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class RegisterAccountResponse extends Response
{
}
