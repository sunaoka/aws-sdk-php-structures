<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\LookupPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyId
 * @property string|null $ObjectIdentifier
 * @property string|null $PolicyType
 */
class PolicyAttachment extends Shape
{
    /**
     * @param array{
     *     PolicyId?: string|null,
     *     ObjectIdentifier?: string|null,
     *     PolicyType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
