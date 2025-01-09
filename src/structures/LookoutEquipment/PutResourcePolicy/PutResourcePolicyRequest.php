<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $ResourcePolicy
 * @property string $PolicyRevisionId
 * @property string $ClientToken
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     ResourcePolicy: string,
     *     PolicyRevisionId?: string,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
