<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeSchedulingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property FairsharePolicy $fairsharePolicy
 * @property array<string, string> $tags
 */
class SchedulingPolicyDetail extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     arn: string,
     *     fairsharePolicy?: FairsharePolicy,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
