<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateVpcAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $VpcArn
 * @property list<string> $SubnetArns
 * @property Shapes\VpcOptions $Options
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class CreateVpcAttachmentRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     VpcArn: string,
     *     SubnetArns: list<string>,
     *     Options?: Shapes\VpcOptions,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
