<?php

namespace Sunaoka\Aws\Structures\S3Control\ListStorageLensConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $StorageLensArn
 * @property string $HomeRegion
 * @property bool|null $IsEnabled
 */
class ListStorageLensConfigurationEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     StorageLensArn: string,
     *     HomeRegion: string,
     *     IsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
