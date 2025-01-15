<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelBundleTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BundleId
 * @property bool|null $DryRun
 */
class CancelBundleTaskRequest extends Request
{
    /**
     * @param array{
     *     BundleId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
