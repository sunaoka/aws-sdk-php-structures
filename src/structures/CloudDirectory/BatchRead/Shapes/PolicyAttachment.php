<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyId
 * @property string $ObjectIdentifier
 * @property string $PolicyType
 */
class PolicyAttachment extends Shape
{
    /**
     * @param array{
     *     PolicyId?: string,
     *     ObjectIdentifier?: string,
     *     PolicyType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
