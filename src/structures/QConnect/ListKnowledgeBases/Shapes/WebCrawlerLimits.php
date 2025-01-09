<?php

namespace Sunaoka\Aws\Structures\QConnect\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 300> $rateLimit
 */
class WebCrawlerLimits extends Shape
{
    /**
     * @param array{rateLimit?: int<1, 300>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
