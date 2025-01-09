<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Key
 */
class ManifestFileLocation extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
