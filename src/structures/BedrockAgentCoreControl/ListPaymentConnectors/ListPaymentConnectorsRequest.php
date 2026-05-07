<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPaymentConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentManagerId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListPaymentConnectorsRequest extends Request
{
    /**
     * @param array{
     *     paymentManagerId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
