<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP'|null $ActionFailurePolicy
 * @property string $Relay
 * @property 'REPLACE'|'PRESERVE'|null $MailFrom
 */
class RelayAction extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP'|null,
     *     Relay: string,
     *     MailFrom?: 'REPLACE'|'PRESERVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
