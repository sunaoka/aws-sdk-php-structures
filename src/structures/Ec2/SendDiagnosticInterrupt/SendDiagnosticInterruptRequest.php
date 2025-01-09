<?php

namespace Sunaoka\Aws\Structures\Ec2\SendDiagnosticInterrupt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property bool $DryRun
 */
class SendDiagnosticInterruptRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
