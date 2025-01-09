<?php

namespace Sunaoka\Aws\Structures\QConnect\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebCrawlerConfiguration $webCrawlerConfiguration
 */
class ManagedSourceConfiguration extends Shape
{
    /**
     * @param array{webCrawlerConfiguration?: WebCrawlerConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
