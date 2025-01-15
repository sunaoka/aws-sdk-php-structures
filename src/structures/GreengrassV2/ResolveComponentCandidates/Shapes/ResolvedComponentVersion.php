<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ResolveComponentCandidates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $componentName
 * @property string|null $componentVersion
 * @property \Psr\Http\Message\StreamInterface|null $recipe
 * @property 'ACTIVE'|'DISCONTINUED'|'DELETED'|null $vendorGuidance
 * @property string|null $message
 */
class ResolvedComponentVersion extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     componentName?: string|null,
     *     componentVersion?: string|null,
     *     recipe?: \Psr\Http\Message\StreamInterface|null,
     *     vendorGuidance?: 'ACTIVE'|'DISCONTINUED'|'DELETED'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
