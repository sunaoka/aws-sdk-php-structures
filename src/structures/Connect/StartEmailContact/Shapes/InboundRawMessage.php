<?php

namespace Sunaoka\Aws\Structures\Connect\StartEmailContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Subject
 * @property string $Body
 * @property string $ContentType
 * @property array<'REFERENCES'|'MESSAGE_ID'|'IN_REPLY_TO'|'X_SES_SPAM_VERDICT'|'X_SES_VIRUS_VERDICT', string> $Headers
 */
class InboundRawMessage extends Shape
{
    /**
     * @param array{
     *     Subject: string,
     *     Body: string,
     *     ContentType: string,
     *     Headers?: array<'REFERENCES'|'MESSAGE_ID'|'IN_REPLY_TO'|'X_SES_SPAM_VERDICT'|'X_SES_VIRUS_VERDICT', string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
