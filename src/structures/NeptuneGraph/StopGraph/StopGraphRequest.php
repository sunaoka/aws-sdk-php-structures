<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StopGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 */
class StopGraphRequest extends Request
{
    /**
     * @param array{graphIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
