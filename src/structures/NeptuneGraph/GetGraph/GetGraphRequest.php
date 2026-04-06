<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 */
class GetGraphRequest extends Request
{
    /**
     * @param array{graphIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
