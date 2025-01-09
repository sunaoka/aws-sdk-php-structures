<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ResolveComponentCandidates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $componentName
 * @property string $componentVersion
 * @property string $recipe
 * @property 'ACTIVE'|'DISCONTINUED'|'DELETED' $vendorGuidance
 * @property string $message
 */
class ResolvedComponentVersion extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     componentName?: string,
     *     componentVersion?: string,
     *     recipe?: string,
     *     vendorGuidance?: 'ACTIVE'|'DISCONTINUED'|'DELETED',
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
