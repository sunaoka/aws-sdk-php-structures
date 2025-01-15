<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MAIL_FROM'|'HELO'|'RECIPIENT'|'SENDER'|'FROM'|'SUBJECT'|'TO'|'CC'|null $Attribute
 * @property string|null $MimeHeaderAttribute
 */
class RuleStringToEvaluate extends Shape
{
    /**
     * @param array{
     *     Attribute?: 'MAIL_FROM'|'HELO'|'RECIPIENT'|'SENDER'|'FROM'|'SUBJECT'|'TO'|'CC'|null,
     *     MimeHeaderAttribute?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
