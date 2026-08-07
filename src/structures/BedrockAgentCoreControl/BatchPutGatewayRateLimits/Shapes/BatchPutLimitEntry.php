<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\BatchPutGatewayRateLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $rateLimitId
 * @property string|null $description
 * @property list<string> $dimensionKeys
 * @property list<LimitEntry> $entries
 */
class BatchPutLimitEntry extends Shape
{
    /**
     * @param array{
     *     rateLimitId?: string|null,
     *     description?: string|null,
     *     dimensionKeys: list<string>,
     *     entries: list<LimitEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
