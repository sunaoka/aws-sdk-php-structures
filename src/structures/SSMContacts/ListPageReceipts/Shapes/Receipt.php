<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPageReceipts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContactChannelArn
 * @property 'DELIVERED'|'ERROR'|'READ'|'SENT'|'STOP' $ReceiptType
 * @property string|null $ReceiptInfo
 * @property \Aws\Api\DateTimeResult $ReceiptTime
 */
class Receipt extends Shape
{
    /**
     * @param array{
     *     ContactChannelArn?: string|null,
     *     ReceiptType: 'DELIVERED'|'ERROR'|'READ'|'SENT'|'STOP',
     *     ReceiptInfo?: string|null,
     *     ReceiptTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
