<?php

namespace Sunaoka\Aws\Structures\Ec2\GetConsoleOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property bool|null $DryRun
 * @property bool|null $Latest
 */
class GetConsoleOutputRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DryRun?: bool|null,
     *     Latest?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
