<?php

namespace Sunaoka\Aws\Structures\Iot\AttachThingPrincipal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $principal
 * @property 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING' $thingPrincipalType
 */
class AttachThingPrincipalRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     principal: string,
     *     thingPrincipalType?: 'EXCLUSIVE_THING'|'NON_EXCLUSIVE_THING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
