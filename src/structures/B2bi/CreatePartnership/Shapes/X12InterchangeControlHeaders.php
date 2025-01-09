<?php

namespace Sunaoka\Aws\Structures\B2bi\CreatePartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $senderIdQualifier
 * @property string $senderId
 * @property string $receiverIdQualifier
 * @property string $receiverId
 * @property string $repetitionSeparator
 * @property string $acknowledgmentRequestedCode
 * @property string $usageIndicatorCode
 */
class X12InterchangeControlHeaders extends Shape
{
    /**
     * @param array{
     *     senderIdQualifier?: string,
     *     senderId?: string,
     *     receiverIdQualifier?: string,
     *     receiverId?: string,
     *     repetitionSeparator?: string,
     *     acknowledgmentRequestedCode?: string,
     *     usageIndicatorCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
