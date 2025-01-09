<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MAIL_FROM'|'HELO'|'RECIPIENT'|'SENDER'|'FROM'|'SUBJECT'|'TO'|'CC' $Attribute
 * @property string $MimeHeaderAttribute
 */
class RuleStringToEvaluate extends Shape
{
    /**
     * @param array{
     *     Attribute?: 'MAIL_FROM'|'HELO'|'RECIPIENT'|'SENDER'|'FROM'|'SUBJECT'|'TO'|'CC',
     *     MimeHeaderAttribute?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
