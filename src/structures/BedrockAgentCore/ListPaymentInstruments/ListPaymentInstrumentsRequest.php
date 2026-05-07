<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListPaymentInstruments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $userId
 * @property string|null $agentName
 * @property string $paymentManagerArn
 * @property string|null $paymentConnectorId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListPaymentInstrumentsRequest extends Request
{
    /**
     * @param array{
     *     userId?: string|null,
     *     agentName?: string|null,
     *     paymentManagerArn: string,
     *     paymentConnectorId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
