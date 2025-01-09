<?php

namespace Sunaoka\Aws\Structures\Route53\CreateReusableDelegationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallerReference
 * @property string $HostedZoneId
 */
class CreateReusableDelegationSetRequest extends Request
{
    /**
     * @param array{
     *     CallerReference: string,
     *     HostedZoneId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
