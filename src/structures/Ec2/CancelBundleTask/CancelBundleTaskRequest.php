<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelBundleTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BundleId
 * @property bool $DryRun
 */
class CancelBundleTaskRequest extends Request
{
    /**
     * @param array{
     *     BundleId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
