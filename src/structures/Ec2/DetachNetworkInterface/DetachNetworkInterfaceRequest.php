<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $AttachmentId
 * @property bool|null $Force
 */
class DetachNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     AttachmentId: string,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
