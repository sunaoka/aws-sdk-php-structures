<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetCrawlerRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
