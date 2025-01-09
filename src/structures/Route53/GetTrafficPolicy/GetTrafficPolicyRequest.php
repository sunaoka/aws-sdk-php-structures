<?php

namespace Sunaoka\Aws\Structures\Route53\GetTrafficPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int $Version
 */
class GetTrafficPolicyRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Version: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
