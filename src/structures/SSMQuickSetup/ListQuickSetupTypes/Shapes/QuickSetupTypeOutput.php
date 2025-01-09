<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListQuickSetupTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LatestVersion
 * @property string $Type
 */
class QuickSetupTypeOutput extends Shape
{
    /**
     * @param array{
     *     LatestVersion?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
