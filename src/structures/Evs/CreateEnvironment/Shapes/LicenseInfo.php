<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $solutionKey
 * @property string $vsanKey
 */
class LicenseInfo extends Shape
{
    /**
     * @param array{
     *     solutionKey: string,
     *     vsanKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
