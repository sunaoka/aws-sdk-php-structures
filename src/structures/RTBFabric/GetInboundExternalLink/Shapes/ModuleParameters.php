<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetInboundExternalLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NoBidModuleParameters|null $noBid
 * @property OpenRtbAttributeModuleParameters|null $openRtbAttribute
 * @property RateLimiterModuleParameters|null $rateLimiter
 */
class ModuleParameters extends Shape
{
    /**
     * @param array{
     *     noBid?: NoBidModuleParameters|null,
     *     openRtbAttribute?: OpenRtbAttributeModuleParameters|null,
     *     rateLimiter?: RateLimiterModuleParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
