<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkPath $networkPath
 * @property PortRange $openPortRange
 * @property 'TCP'|'UDP' $protocol
 */
class NetworkReachabilityDetails extends Shape
{
    /**
     * @param array{
     *     networkPath: NetworkPath,
     *     openPortRange: PortRange,
     *     protocol: 'TCP'|'UDP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
