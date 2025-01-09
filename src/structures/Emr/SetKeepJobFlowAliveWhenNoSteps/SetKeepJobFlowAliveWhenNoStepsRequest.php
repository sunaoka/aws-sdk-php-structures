<?php

namespace Sunaoka\Aws\Structures\Emr\SetKeepJobFlowAliveWhenNoSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $JobFlowIds
 * @property bool $KeepJobFlowAliveWhenNoSteps
 */
class SetKeepJobFlowAliveWhenNoStepsRequest extends Request
{
    /**
     * @param array{
     *     JobFlowIds: list<string>,
     *     KeepJobFlowAliveWhenNoSteps: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
