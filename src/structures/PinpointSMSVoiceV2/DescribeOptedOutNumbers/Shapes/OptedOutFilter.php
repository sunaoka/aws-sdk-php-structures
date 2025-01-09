<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptedOutNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'end-user-opted-out' $Name
 * @property list<string> $Values
 */
class OptedOutFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'end-user-opted-out',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
