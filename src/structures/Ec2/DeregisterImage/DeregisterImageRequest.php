<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property bool $DryRun
 */
class DeregisterImageRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
