<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Critical
 * @property KeyUsageFlags $UsageFlags
 */
class KeyUsage extends Shape
{
    /**
     * @param array{
     *     Critical?: bool|null,
     *     UsageFlags: KeyUsageFlags
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
