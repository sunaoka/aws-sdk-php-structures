<?php

namespace Sunaoka\Aws\Structures\B2bi\ListPartnerships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $senderIdQualifier
 * @property string|null $senderId
 * @property string|null $receiverIdQualifier
 * @property string|null $receiverId
 * @property string|null $repetitionSeparator
 * @property string|null $acknowledgmentRequestedCode
 * @property string|null $usageIndicatorCode
 */
class X12InterchangeControlHeaders extends Shape
{
    /**
     * @param array{
     *     senderIdQualifier?: string|null,
     *     senderId?: string|null,
     *     receiverIdQualifier?: string|null,
     *     receiverId?: string|null,
     *     repetitionSeparator?: string|null,
     *     acknowledgmentRequestedCode?: string|null,
     *     usageIndicatorCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
