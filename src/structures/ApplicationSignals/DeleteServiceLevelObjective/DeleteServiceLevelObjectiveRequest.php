<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\DeleteServiceLevelObjective;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteServiceLevelObjectiveRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
