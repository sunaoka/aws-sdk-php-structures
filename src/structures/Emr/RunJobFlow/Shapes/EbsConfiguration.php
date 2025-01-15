<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EbsBlockDeviceConfig>|null $EbsBlockDeviceConfigs
 * @property bool|null $EbsOptimized
 */
class EbsConfiguration extends Shape
{
    /**
     * @param array{
     *     EbsBlockDeviceConfigs?: list<EbsBlockDeviceConfig>|null,
     *     EbsOptimized?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
