<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetVpcAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment $Attachment
 * @property list<string> $SubnetArns
 * @property VpcOptions $Options
 */
class VpcAttachment extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment,
     *     SubnetArns?: list<string>,
     *     Options?: VpcOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
