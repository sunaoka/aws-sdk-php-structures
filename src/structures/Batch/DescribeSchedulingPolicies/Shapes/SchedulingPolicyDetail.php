<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeSchedulingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property FairsharePolicy|null $fairsharePolicy
 * @property array<string, string>|null $tags
 */
class SchedulingPolicyDetail extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     arn: string,
     *     fairsharePolicy?: FairsharePolicy|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
