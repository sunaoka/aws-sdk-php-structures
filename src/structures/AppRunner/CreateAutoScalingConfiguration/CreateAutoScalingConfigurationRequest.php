<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateAutoScalingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingConfigurationName
 * @property int<1, 200>|null $MaxConcurrency
 * @property int<1, 25>|null $MinSize
 * @property int<1, max>|null $MaxSize
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAutoScalingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingConfigurationName: string,
     *     MaxConcurrency?: int<1, 200>|null,
     *     MinSize?: int<1, 25>|null,
     *     MaxSize?: int<1, max>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
