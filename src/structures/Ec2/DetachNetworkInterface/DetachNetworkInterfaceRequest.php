<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $AttachmentId
 * @property bool $Force
 */
class DetachNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     AttachmentId: string,
     *     Force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
