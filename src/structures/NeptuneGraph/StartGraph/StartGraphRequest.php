<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 */
class StartGraphRequest extends Request
{
    /**
     * @param array{graphIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
