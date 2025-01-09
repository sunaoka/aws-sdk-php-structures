<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ReplaceWith
 */
class ReplaceRecipientAction extends Shape
{
    /**
     * @param array{ReplaceWith?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
