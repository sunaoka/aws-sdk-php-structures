<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Smpte2110ReceiverGroup>|null $Smpte2110ReceiverGroups
 */
class Smpte2110ReceiverGroupSettings extends Shape
{
    /**
     * @param array{Smpte2110ReceiverGroups?: list<Smpte2110ReceiverGroup>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
