<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListQuickSetupTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LatestVersion
 * @property string|null $Type
 */
class QuickSetupTypeOutput extends Shape
{
    /**
     * @param array{
     *     LatestVersion?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
