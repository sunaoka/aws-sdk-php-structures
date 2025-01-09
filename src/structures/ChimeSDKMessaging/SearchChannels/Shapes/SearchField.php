<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\SearchChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MEMBERS' $Key
 * @property list<string> $Values
 * @property 'EQUALS'|'INCLUDES' $Operator
 */
class SearchField extends Shape
{
    /**
     * @param array{
     *     Key: 'MEMBERS',
     *     Values: list<string>,
     *     Operator: 'EQUALS'|'INCLUDES'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
