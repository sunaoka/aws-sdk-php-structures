<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Protocol
 * @property string $Port
 * @property string $Host
 * @property string $Path
 * @property string $Query
 * @property 'HTTP_301'|'HTTP_302' $StatusCode
 */
class RedirectActionConfig extends Shape
{
    /**
     * @param array{
     *     Protocol?: string,
     *     Port?: string,
     *     Host?: string,
     *     Path?: string,
     *     Query?: string,
     *     StatusCode: 'HTTP_301'|'HTTP_302'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
