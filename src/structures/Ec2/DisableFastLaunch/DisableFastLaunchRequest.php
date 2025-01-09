<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property bool $Force
 * @property bool $DryRun
 */
class DisableFastLaunchRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     Force?: bool,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
