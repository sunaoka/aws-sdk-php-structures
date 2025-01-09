<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFlowLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $FlowLogIds
 */
class DeleteFlowLogsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     FlowLogIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
