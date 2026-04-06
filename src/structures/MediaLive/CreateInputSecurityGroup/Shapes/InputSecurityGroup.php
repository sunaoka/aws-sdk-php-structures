<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInputSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property list<string>|null $Inputs
 * @property 'IDLE'|'IN_USE'|'UPDATING'|'DELETED'|null $State
 * @property array<string, string>|null $Tags
 * @property list<InputWhitelistRule>|null $WhitelistRules
 * @property list<string>|null $Channels
 */
class InputSecurityGroup extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Inputs?: list<string>|null,
     *     State?: 'IDLE'|'IN_USE'|'UPDATING'|'DELETED'|null,
     *     Tags?: array<string, string>|null,
     *     WhitelistRules?: list<InputWhitelistRule>|null,
     *     Channels?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
