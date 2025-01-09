<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CurrencyCode
 * @property int $Duration
 * @property 'MONTHS' $DurationUnits
 * @property string $OfferingArn
 * @property string $OfferingDescription
 * @property string $PricePerUnit
 * @property 'HOURLY' $PriceUnits
 * @property ResourceSpecification $ResourceSpecification
 */
class Offering extends Shape
{
    /**
     * @param array{
     *     CurrencyCode: string,
     *     Duration: int,
     *     DurationUnits: 'MONTHS',
     *     OfferingArn: string,
     *     OfferingDescription: string,
     *     PricePerUnit: string,
     *     PriceUnits: 'HOURLY',
     *     ResourceSpecification: ResourceSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
