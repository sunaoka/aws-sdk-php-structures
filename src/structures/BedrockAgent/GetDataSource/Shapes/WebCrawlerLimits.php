<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxPages
 * @property int $rateLimit
 */
class WebCrawlerLimits extends Shape
{
    /**
     * @param array{
     *     maxPages?: int,
     *     rateLimit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
