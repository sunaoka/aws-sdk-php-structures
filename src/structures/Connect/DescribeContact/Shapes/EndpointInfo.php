<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TELEPHONE_NUMBER'|'VOIP'|'CONTACT_FLOW'|'CONNECT_PHONENUMBER_ARN'|'EMAIL_ADDRESS' $Type
 * @property string $Address
 * @property string $DisplayName
 */
class EndpointInfo extends Shape
{
    /**
     * @param array{
     *     Type?: 'TELEPHONE_NUMBER'|'VOIP'|'CONTACT_FLOW'|'CONNECT_PHONENUMBER_ARN'|'EMAIL_ADDRESS',
     *     Address?: string,
     *     DisplayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
