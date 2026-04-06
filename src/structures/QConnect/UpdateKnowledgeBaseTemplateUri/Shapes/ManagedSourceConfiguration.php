<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateKnowledgeBaseTemplateUri\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebCrawlerConfiguration|null $webCrawlerConfiguration
 */
class ManagedSourceConfiguration extends Shape
{
    /**
     * @param array{webCrawlerConfiguration?: WebCrawlerConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
