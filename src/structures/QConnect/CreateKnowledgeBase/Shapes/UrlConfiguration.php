<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SeedUrl>|null $seedUrls
 */
class UrlConfiguration extends Shape
{
    /**
     * @param array{seedUrls?: list<SeedUrl>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
