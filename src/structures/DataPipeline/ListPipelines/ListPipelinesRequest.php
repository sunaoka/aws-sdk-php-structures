<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ListPipelines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $marker
 */
class ListPipelinesRequest extends Request
{
    /**
     * @param array{marker?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
