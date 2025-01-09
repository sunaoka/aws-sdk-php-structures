<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ListPipelines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $marker
 */
class ListPipelinesRequest extends Request
{
    /**
     * @param array{marker?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
