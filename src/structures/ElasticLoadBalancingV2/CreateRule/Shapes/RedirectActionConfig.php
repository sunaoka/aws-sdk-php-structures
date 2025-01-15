<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Protocol
 * @property string|null $Port
 * @property string|null $Host
 * @property string|null $Path
 * @property string|null $Query
 * @property 'HTTP_301'|'HTTP_302' $StatusCode
 */
class RedirectActionConfig extends Shape
{
    /**
     * @param array{
     *     Protocol?: string|null,
     *     Port?: string|null,
     *     Host?: string|null,
     *     Path?: string|null,
     *     Query?: string|null,
     *     StatusCode: 'HTTP_301'|'HTTP_302'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
