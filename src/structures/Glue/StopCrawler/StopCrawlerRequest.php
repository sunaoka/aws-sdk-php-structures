<?php

namespace Sunaoka\Aws\Structures\Glue\StopCrawler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StopCrawlerRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
