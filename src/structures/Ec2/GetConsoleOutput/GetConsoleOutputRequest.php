<?php

namespace Sunaoka\Aws\Structures\Ec2\GetConsoleOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property bool|null $Latest
 * @property bool|null $DryRun
 */
class GetConsoleOutputRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Latest?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
