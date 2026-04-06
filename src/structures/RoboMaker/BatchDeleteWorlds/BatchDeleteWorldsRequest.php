<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDeleteWorlds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $worlds
 */
class BatchDeleteWorldsRequest extends Request
{
    /**
     * @param array{worlds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
