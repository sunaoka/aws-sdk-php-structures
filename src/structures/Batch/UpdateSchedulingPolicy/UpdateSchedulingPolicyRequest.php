<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateSchedulingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property Shapes\FairsharePolicy $fairsharePolicy
 */
class UpdateSchedulingPolicyRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     fairsharePolicy?: Shapes\FairsharePolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
