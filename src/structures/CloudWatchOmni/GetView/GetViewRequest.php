<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetViewRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
