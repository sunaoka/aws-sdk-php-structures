<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteViewRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
