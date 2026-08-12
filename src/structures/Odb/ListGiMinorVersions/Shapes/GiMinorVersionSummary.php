<?php

namespace Sunaoka\Aws\Structures\Odb\ListGiMinorVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property string|null $gridImageId
 */
class GiMinorVersionSummary extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     gridImageId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
