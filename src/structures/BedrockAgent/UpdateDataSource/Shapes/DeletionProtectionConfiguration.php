<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $deletionProtectionStatus
 * @property int<0, 100>|null $deletionProtectionThreshold
 */
class DeletionProtectionConfiguration extends Shape
{
    /**
     * @param array{
     *     deletionProtectionStatus: 'ENABLED'|'DISABLED',
     *     deletionProtectionThreshold?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
