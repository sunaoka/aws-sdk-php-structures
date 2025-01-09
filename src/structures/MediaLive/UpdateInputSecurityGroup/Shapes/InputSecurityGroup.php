<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property list<string> $Inputs
 * @property 'IDLE'|'IN_USE'|'UPDATING'|'DELETED' $State
 * @property array<string, string> $Tags
 * @property list<InputWhitelistRule> $WhitelistRules
 */
class InputSecurityGroup extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     Inputs?: list<string>,
     *     State?: 'IDLE'|'IN_USE'|'UPDATING'|'DELETED',
     *     Tags?: array<string, string>,
     *     WhitelistRules?: list<InputWhitelistRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
