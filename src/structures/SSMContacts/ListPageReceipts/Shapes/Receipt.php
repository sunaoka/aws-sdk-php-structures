<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPageReceipts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactChannelArn
 * @property 'DELIVERED'|'ERROR'|'READ'|'SENT'|'STOP' $ReceiptType
 * @property string $ReceiptInfo
 * @property \Aws\Api\DateTimeResult $ReceiptTime
 */
class Receipt extends Shape
{
    /**
     * @param array{
     *     ContactChannelArn?: string,
     *     ReceiptType: 'DELIVERED'|'ERROR'|'READ'|'SENT'|'STOP',
     *     ReceiptInfo?: string,
     *     ReceiptTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
