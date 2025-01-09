<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateVpcAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 * @property list<string> $AddSubnetArns
 * @property list<string> $RemoveSubnetArns
 * @property Shapes\VpcOptions $Options
 */
class UpdateVpcAttachmentRequest extends Request
{
    /**
     * @param array{
     *     AttachmentId: string,
     *     AddSubnetArns?: list<string>,
     *     RemoveSubnetArns?: list<string>,
     *     Options?: Shapes\VpcOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
