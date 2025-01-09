<?php

namespace Sunaoka\Aws\Structures\Ec2\BundleInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\Storage $Storage
 * @property bool $DryRun
 */
class BundleInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Storage: Shapes\Storage,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
