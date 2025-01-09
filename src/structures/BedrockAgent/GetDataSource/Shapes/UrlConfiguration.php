<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SeedUrl> $seedUrls
 */
class UrlConfiguration extends Shape
{
    /**
     * @param array{seedUrls?: list<SeedUrl>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
