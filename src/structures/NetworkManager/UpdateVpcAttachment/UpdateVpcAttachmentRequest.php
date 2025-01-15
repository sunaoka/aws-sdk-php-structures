<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateVpcAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 * @property list<string>|null $AddSubnetArns
 * @property list<string>|null $RemoveSubnetArns
 * @property Shapes\VpcOptions|null $Options
 */
class UpdateVpcAttachmentRequest extends Request
{
    /**
     * @param array{
     *     AttachmentId: string,
     *     AddSubnetArns?: list<string>|null,
     *     RemoveSubnetArns?: list<string>|null,
     *     Options?: Shapes\VpcOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
