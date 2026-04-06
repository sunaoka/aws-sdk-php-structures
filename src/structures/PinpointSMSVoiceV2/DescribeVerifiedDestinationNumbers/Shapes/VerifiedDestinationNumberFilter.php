<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeVerifiedDestinationNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'status'|'rcs-agent-id' $Name
 * @property list<string> $Values
 */
class VerifiedDestinationNumberFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'status'|'rcs-agent-id',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
