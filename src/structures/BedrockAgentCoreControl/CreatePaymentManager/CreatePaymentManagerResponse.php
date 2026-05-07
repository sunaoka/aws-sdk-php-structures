<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePaymentManager;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $paymentManagerArn
 * @property string $paymentManagerId
 * @property string $name
 * @property 'CUSTOM_JWT'|'AWS_IAM' $authorizerType
 * @property Shapes\AuthorizerConfiguration|null $authorizerConfiguration
 * @property string $roleArn
 * @property Shapes\WorkloadIdentityDetails|null $workloadIdentityDetails
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property array<string, string>|null $tags
 */
class CreatePaymentManagerResponse extends Response
{
}
