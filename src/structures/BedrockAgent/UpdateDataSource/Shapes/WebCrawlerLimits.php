<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 300>|null $rateLimit
 * @property int<1, max>|null $maxPages
 */
class WebCrawlerLimits extends Shape
{
    /**
     * @param array{
     *     rateLimit?: int<1, 300>|null,
     *     maxPages?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
