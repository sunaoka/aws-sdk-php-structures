<?php

namespace Sunaoka\Aws\Structures\Glue\StopTrigger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StopTriggerRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
