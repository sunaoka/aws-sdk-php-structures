<?php

namespace Sunaoka\Aws\Structures\Ec2\GetConsoleScreenshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $InstanceId
 * @property bool|null $WakeUp
 */
class GetConsoleScreenshotRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceId: string,
     *     WakeUp?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
