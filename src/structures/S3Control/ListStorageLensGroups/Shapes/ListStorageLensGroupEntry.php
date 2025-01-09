<?php

namespace Sunaoka\Aws\Structures\S3Control\ListStorageLensGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $StorageLensGroupArn
 * @property string $HomeRegion
 */
class ListStorageLensGroupEntry extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     StorageLensGroupArn: string,
     *     HomeRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
