<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateSourceLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccessConfiguration|null $AccessConfiguration
 * @property Shapes\DefaultSegmentDeliveryConfiguration|null $DefaultSegmentDeliveryConfiguration
 * @property Shapes\HttpConfiguration $HttpConfiguration
 * @property list<Shapes\SegmentDeliveryConfiguration>|null $SegmentDeliveryConfigurations
 * @property string $SourceLocationName
 * @property array<string, string>|null $Tags
 */
class CreateSourceLocationRequest extends Request
{
    /**
     * @param array{
     *     AccessConfiguration?: Shapes\AccessConfiguration|null,
     *     DefaultSegmentDeliveryConfiguration?: Shapes\DefaultSegmentDeliveryConfiguration|null,
     *     HttpConfiguration: Shapes\HttpConfiguration,
     *     SegmentDeliveryConfigurations?: list<Shapes\SegmentDeliveryConfiguration>|null,
     *     SourceLocationName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
