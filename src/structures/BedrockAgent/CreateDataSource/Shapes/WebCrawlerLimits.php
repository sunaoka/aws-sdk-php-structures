<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $maxPages
 * @property int<1, 300>|null $rateLimit
 */
class WebCrawlerLimits extends Shape
{
    /**
     * @param array{
     *     maxPages?: int<1, max>|null,
     *     rateLimit?: int<1, 300>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
