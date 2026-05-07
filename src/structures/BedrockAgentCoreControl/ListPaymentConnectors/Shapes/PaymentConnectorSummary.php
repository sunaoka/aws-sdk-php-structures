<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPaymentConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $paymentConnectorId
 * @property string $name
 * @property 'CoinbaseCDP'|'StripePrivy' $type
 * @property 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class PaymentConnectorSummary extends Shape
{
    /**
     * @param array{
     *     paymentConnectorId: string,
     *     name: string,
     *     type: 'CoinbaseCDP'|'StripePrivy',
     *     status: 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED',
     *     lastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
