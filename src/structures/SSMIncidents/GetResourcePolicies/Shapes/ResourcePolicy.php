<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetResourcePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyDocument
 * @property string $policyId
 * @property string $ramResourceShareRegion
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     policyDocument: string,
     *     policyId: string,
     *     ramResourceShareRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
