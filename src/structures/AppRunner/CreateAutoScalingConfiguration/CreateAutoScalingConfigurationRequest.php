<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateAutoScalingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingConfigurationName
 * @property int<1, 200> $MaxConcurrency
 * @property int<1, 25> $MinSize
 * @property int<1, max> $MaxSize
 * @property list<Shapes\Tag> $Tags
 */
class CreateAutoScalingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingConfigurationName: string,
     *     MaxConcurrency?: int<1, 200>,
     *     MinSize?: int<1, 25>,
     *     MaxSize?: int<1, max>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
