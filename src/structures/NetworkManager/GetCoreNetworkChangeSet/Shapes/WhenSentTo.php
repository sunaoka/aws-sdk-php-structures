<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $WhenSentToSegmentsList
 */
class WhenSentTo extends Shape
{
    /**
     * @param array{WhenSentToSegmentsList?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
