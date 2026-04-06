<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property 'URL'|'ATTACHMENT'|'CONTACT_ANALYSIS'|'NUMBER'|'STRING'|'DATE'|'EMAIL'|'EMAIL_MESSAGE' $Type
 * @property 'AVAILABLE'|'DELETED'|'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED'|null $Status
 * @property string|null $Arn
 * @property string|null $StatusReason
 */
class Reference extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Type: 'URL'|'ATTACHMENT'|'CONTACT_ANALYSIS'|'NUMBER'|'STRING'|'DATE'|'EMAIL'|'EMAIL_MESSAGE',
     *     Status?: 'AVAILABLE'|'DELETED'|'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED'|null,
     *     Arn?: string|null,
     *     StatusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
