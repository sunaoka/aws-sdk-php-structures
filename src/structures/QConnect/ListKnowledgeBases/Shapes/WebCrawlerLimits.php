<?php

namespace Sunaoka\Aws\Structures\QConnect\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $rateLimit
 */
class WebCrawlerLimits extends Shape
{
    /**
     * @param array{rateLimit?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
