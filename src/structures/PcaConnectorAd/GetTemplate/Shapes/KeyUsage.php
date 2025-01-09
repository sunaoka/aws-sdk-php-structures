<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Critical
 * @property KeyUsageFlags $UsageFlags
 */
class KeyUsage extends Shape
{
    /**
     * @param array{
     *     Critical?: bool,
     *     UsageFlags: KeyUsageFlags
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
