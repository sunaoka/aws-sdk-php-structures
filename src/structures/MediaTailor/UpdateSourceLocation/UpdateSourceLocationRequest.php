<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateSourceLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccessConfiguration $AccessConfiguration
 * @property Shapes\DefaultSegmentDeliveryConfiguration $DefaultSegmentDeliveryConfiguration
 * @property Shapes\HttpConfiguration $HttpConfiguration
 * @property list<Shapes\SegmentDeliveryConfiguration> $SegmentDeliveryConfigurations
 * @property string $SourceLocationName
 */
class UpdateSourceLocationRequest extends Request
{
    /**
     * @param array{
     *     AccessConfiguration?: Shapes\AccessConfiguration,
     *     DefaultSegmentDeliveryConfiguration?: Shapes\DefaultSegmentDeliveryConfiguration,
     *     HttpConfiguration: Shapes\HttpConfiguration,
     *     SegmentDeliveryConfigurations?: list<Shapes\SegmentDeliveryConfiguration>,
     *     SourceLocationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
