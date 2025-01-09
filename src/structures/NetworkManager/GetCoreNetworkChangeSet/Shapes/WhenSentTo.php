<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $WhenSentToSegmentsList
 */
class WhenSentTo extends Shape
{
    /**
     * @param array{WhenSentToSegmentsList?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
