<?php

namespace Sunaoka\Aws\Structures\S3Control\ListStorageLensConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $StorageLensArn
 * @property string $HomeRegion
 * @property bool $IsEnabled
 */
class ListStorageLensConfigurationEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     StorageLensArn: string,
     *     HomeRegion: string,
     *     IsEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
