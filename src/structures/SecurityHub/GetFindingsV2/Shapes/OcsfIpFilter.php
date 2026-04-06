<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'evidences.dst_endpoint.ip'|'evidences.src_endpoint.ip'|null $FieldName
 * @property IpFilter|null $Filter
 */
class OcsfIpFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'evidences.dst_endpoint.ip'|'evidences.src_endpoint.ip'|null,
     *     Filter?: IpFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
