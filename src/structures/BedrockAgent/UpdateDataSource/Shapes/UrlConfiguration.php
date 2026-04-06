<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

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
