<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property bool|null $Force
 * @property bool|null $DryRun
 */
class DisableFastLaunchRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     Force?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
