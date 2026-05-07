<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPaymentManagers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $paymentManagerArn
 * @property string $paymentManagerId
 * @property string $name
 * @property string|null $description
 * @property 'CUSTOM_JWT'|'AWS_IAM' $authorizerType
 * @property string $roleArn
 * @property 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class PaymentManagerSummary extends Shape
{
    /**
     * @param array{
     *     paymentManagerArn: string,
     *     paymentManagerId: string,
     *     name: string,
     *     description?: string|null,
     *     authorizerType: 'CUSTOM_JWT'|'AWS_IAM',
     *     roleArn: string,
     *     status: 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED',
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
