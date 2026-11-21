<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $EventId
 * @property string $WebAclArn
 */
class GetEventRequest extends Request
{
    /**
     * @param array{
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     EventId: string,
     *     WebAclArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
