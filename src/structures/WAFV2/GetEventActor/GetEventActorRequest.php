<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetEventActor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $EventActorId
 */
class GetEventActorRequest extends Request
{
    /**
     * @param array{
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     EventActorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
