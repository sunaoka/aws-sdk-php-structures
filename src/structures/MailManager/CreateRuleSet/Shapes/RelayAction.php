<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP'|null $ActionFailurePolicy
 * @property 'REPLACE'|'PRESERVE'|null $MailFrom
 * @property string $Relay
 */
class RelayAction extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP'|null,
     *     MailFrom?: 'REPLACE'|'PRESERVE'|null,
     *     Relay: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
