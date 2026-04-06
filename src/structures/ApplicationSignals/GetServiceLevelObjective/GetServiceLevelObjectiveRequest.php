<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetServiceLevelObjective;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetServiceLevelObjectiveRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
