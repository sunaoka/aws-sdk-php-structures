<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetVpcAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment|null $Attachment
 * @property list<string>|null $SubnetArns
 * @property VpcOptions|null $Options
 */
class VpcAttachment extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment|null,
     *     SubnetArns?: list<string>|null,
     *     Options?: VpcOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
