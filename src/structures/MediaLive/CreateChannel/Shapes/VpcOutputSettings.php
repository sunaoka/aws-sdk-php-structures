<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $PublicAddressAllocationIds
 * @property list<string> $SecurityGroupIds
 * @property list<string> $SubnetIds
 */
class VpcOutputSettings extends Shape
{
    /**
     * @param array{
     *     PublicAddressAllocationIds?: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     SubnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
