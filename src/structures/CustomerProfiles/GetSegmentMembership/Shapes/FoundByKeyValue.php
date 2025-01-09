<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyName
 * @property list<string> $Values
 */
class FoundByKeyValue extends Shape
{
    /**
     * @param array{
     *     KeyName?: string,
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
