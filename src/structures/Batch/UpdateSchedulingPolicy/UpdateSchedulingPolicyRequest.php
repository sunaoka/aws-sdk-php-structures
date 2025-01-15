<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateSchedulingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property Shapes\FairsharePolicy|null $fairsharePolicy
 */
class UpdateSchedulingPolicyRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     fairsharePolicy?: Shapes\FairsharePolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
