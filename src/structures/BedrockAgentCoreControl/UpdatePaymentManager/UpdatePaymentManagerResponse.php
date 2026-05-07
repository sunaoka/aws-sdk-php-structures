<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentManager;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $paymentManagerArn
 * @property string $paymentManagerId
 * @property string $name
 * @property 'CUSTOM_JWT'|'AWS_IAM' $authorizerType
 * @property string $roleArn
 * @property Shapes\WorkloadIdentityDetails|null $workloadIdentityDetails
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 */
class UpdatePaymentManagerResponse extends Response
{
}
