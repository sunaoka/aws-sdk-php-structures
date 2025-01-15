<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $PublicAddressAllocationIds
 * @property list<string>|null $SecurityGroupIds
 * @property list<string> $SubnetIds
 */
class VpcOutputSettings extends Shape
{
    /**
     * @param array{
     *     PublicAddressAllocationIds?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     SubnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
