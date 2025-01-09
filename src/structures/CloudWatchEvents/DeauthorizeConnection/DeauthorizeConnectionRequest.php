<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DeauthorizeConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeauthorizeConnectionRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
