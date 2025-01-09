<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AddRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<string> $SubnetIds
 */
class DirectoryVpcSettings extends Shape
{
    /**
     * @param array{
     *     VpcId: string,
     *     SubnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
