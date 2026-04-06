<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
