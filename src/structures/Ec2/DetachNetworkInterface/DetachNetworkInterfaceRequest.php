<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 * @property bool|null $DryRun
 * @property bool|null $Force
 */
class DetachNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     AttachmentId: string,
     *     DryRun?: bool|null,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
