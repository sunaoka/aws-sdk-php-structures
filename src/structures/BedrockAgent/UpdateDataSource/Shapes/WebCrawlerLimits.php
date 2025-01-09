<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maxPages
 * @property int<1, 300> $rateLimit
 */
class WebCrawlerLimits extends Shape
{
    /**
     * @param array{
     *     maxPages?: int<1, max>,
     *     rateLimit?: int<1, 300>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
