<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrafficMirrorFilterId
 * @property list<TrafficMirrorFilterRule>|null $IngressFilterRules
 * @property list<TrafficMirrorFilterRule>|null $EgressFilterRules
 * @property list<'amazon-dns'>|null $NetworkServices
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 */
class TrafficMirrorFilter extends Shape
{
    /**
     * @param array{
     *     TrafficMirrorFilterId?: string|null,
     *     IngressFilterRules?: list<TrafficMirrorFilterRule>|null,
     *     EgressFilterRules?: list<TrafficMirrorFilterRule>|null,
     *     NetworkServices?: list<'amazon-dns'>|null,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
