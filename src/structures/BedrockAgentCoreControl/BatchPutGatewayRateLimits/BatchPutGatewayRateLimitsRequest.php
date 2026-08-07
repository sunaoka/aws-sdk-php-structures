<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\BatchPutGatewayRateLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string|null $clientToken
 * @property list<Shapes\BatchPutLimitEntry> $rateLimits
 */
class BatchPutGatewayRateLimitsRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     clientToken?: string|null,
     *     rateLimits: list<Shapes\BatchPutLimitEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
