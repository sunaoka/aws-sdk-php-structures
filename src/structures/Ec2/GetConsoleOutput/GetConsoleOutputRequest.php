<?php

namespace Sunaoka\Aws\Structures\Ec2\GetConsoleOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property bool $Latest
 * @property bool $DryRun
 */
class GetConsoleOutputRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Latest?: bool,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
