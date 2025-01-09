<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EbsBlockDeviceConfig> $EbsBlockDeviceConfigs
 * @property bool $EbsOptimized
 */
class EbsConfiguration extends Shape
{
    /**
     * @param array{
     *     EbsBlockDeviceConfigs?: list<EbsBlockDeviceConfig>,
     *     EbsOptimized?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
