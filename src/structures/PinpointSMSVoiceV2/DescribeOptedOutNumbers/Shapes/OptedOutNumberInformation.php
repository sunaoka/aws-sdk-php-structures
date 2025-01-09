<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptedOutNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OptedOutNumber
 * @property \Aws\Api\DateTimeResult $OptedOutTimestamp
 * @property bool $EndUserOptedOut
 */
class OptedOutNumberInformation extends Shape
{
    /**
     * @param array{
     *     OptedOutNumber: string,
     *     OptedOutTimestamp: \Aws\Api\DateTimeResult,
     *     EndUserOptedOut: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
