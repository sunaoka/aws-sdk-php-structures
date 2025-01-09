<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP' $ActionFailurePolicy
 * @property 'REPLACE'|'PRESERVE' $MailFrom
 * @property string $Relay
 */
class RelayAction extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP',
     *     MailFrom?: 'REPLACE'|'PRESERVE',
     *     Relay: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
