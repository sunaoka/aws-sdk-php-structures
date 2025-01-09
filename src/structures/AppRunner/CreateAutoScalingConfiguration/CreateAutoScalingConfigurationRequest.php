<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateAutoScalingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingConfigurationName
 * @property int $MaxConcurrency
 * @property int $MinSize
 * @property int $MaxSize
 * @property list<Shapes\Tag> $Tags
 */
class CreateAutoScalingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingConfigurationName: string,
     *     MaxConcurrency?: int,
     *     MinSize?: int,
     *     MaxSize?: int,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
