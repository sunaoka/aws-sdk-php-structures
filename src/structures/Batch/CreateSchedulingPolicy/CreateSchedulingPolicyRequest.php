<?php

namespace Sunaoka\Aws\Structures\Batch\CreateSchedulingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\QuotaSharePolicy|null $quotaSharePolicy
 * @property Shapes\FairsharePolicy|null $fairsharePolicy
 * @property array<string, string>|null $tags
 */
class CreateSchedulingPolicyRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     quotaSharePolicy?: Shapes\QuotaSharePolicy|null,
     *     fairsharePolicy?: Shapes\FairsharePolicy|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
