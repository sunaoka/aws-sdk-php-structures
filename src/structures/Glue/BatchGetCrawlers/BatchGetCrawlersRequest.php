<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetCrawlers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $CrawlerNames
 */
class BatchGetCrawlersRequest extends Request
{
    /**
     * @param array{CrawlerNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
