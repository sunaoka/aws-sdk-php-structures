<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\ListResourcePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property string $RevisionId
 */
class ResourcePolicySummary extends Shape
{
    /**
     * @param array{
     *     PolicyName: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
