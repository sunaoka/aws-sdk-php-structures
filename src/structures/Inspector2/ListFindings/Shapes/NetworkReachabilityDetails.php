<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PortRange $openPortRange
 * @property 'TCP'|'UDP' $protocol
 * @property NetworkPath $networkPath
 */
class NetworkReachabilityDetails extends Shape
{
    /**
     * @param array{
     *     openPortRange: PortRange,
     *     protocol: 'TCP'|'UDP',
     *     networkPath: NetworkPath
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
