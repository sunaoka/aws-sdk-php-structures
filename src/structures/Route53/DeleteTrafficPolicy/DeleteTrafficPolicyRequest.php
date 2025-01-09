<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteTrafficPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int $Version
 */
class DeleteTrafficPolicyRequest extends Request
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
