<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'URL'|'ATTACHMENT'|'CONTACT_ANALYSIS'|'NUMBER'|'STRING'|'DATE'|'EMAIL'|'EMAIL_MESSAGE' $Type
 * @property 'AVAILABLE'|'DELETED'|'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED' $Status
 * @property string $Arn
 * @property string $StatusReason
 */
class Reference extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Type: 'URL'|'ATTACHMENT'|'CONTACT_ANALYSIS'|'NUMBER'|'STRING'|'DATE'|'EMAIL'|'EMAIL_MESSAGE',
     *     Status?: 'AVAILABLE'|'DELETED'|'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED',
     *     Arn?: string,
     *     StatusReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
