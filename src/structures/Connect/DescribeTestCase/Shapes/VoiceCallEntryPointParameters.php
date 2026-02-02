<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourcePhoneNumber
 * @property string|null $DestinationPhoneNumber
 * @property string|null $FlowId
 */
class VoiceCallEntryPointParameters extends Shape
{
    /**
     * @param array{
     *     SourcePhoneNumber?: string|null,
     *     DestinationPhoneNumber?: string|null,
     *     FlowId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
