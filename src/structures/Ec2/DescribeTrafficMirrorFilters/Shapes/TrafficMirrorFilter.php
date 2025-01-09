<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrafficMirrorFilterId
 * @property list<TrafficMirrorFilterRule> $IngressFilterRules
 * @property list<TrafficMirrorFilterRule> $EgressFilterRules
 * @property list<'amazon-dns'> $NetworkServices
 * @property string $Description
 * @property list<Tag> $Tags
 */
class TrafficMirrorFilter extends Shape
{
    /**
     * @param array{
     *     TrafficMirrorFilterId?: string,
     *     IngressFilterRules?: list<TrafficMirrorFilterRule>,
     *     EgressFilterRules?: list<TrafficMirrorFilterRule>,
     *     NetworkServices?: list<'amazon-dns'>,
     *     Description?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
