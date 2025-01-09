<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\StopJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RunId
 */
class StopJobRunRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
