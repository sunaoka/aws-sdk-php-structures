<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteCrawler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteCrawlerRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
