<?php

namespace Sunaoka\Aws\Structures\Ec2\GetConsoleScreenshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $InstanceId
 * @property bool $WakeUp
 */
class GetConsoleScreenshotRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceId: string,
     *     WakeUp?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
