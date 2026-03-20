<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateSchedulingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property Shapes\QuotaSharePolicy|null $quotaSharePolicy
 * @property Shapes\FairsharePolicy|null $fairsharePolicy
 */
class UpdateSchedulingPolicyRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     quotaSharePolicy?: Shapes\QuotaSharePolicy|null,
     *     fairsharePolicy?: Shapes\FairsharePolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
