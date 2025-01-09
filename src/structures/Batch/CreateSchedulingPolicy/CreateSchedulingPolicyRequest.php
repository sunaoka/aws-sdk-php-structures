<?php

namespace Sunaoka\Aws\Structures\Batch\CreateSchedulingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\FairsharePolicy $fairsharePolicy
 * @property array<string, string> $tags
 */
class CreateSchedulingPolicyRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     fairsharePolicy?: Shapes\FairsharePolicy,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
