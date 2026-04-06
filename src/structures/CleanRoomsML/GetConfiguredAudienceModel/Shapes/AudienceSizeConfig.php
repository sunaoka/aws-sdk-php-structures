<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredAudienceModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ABSOLUTE'|'PERCENTAGE' $audienceSizeType
 * @property list<int<1, 20000000>> $audienceSizeBins
 */
class AudienceSizeConfig extends Shape
{
    /**
     * @param array{
     *     audienceSizeType: 'ABSOLUTE'|'PERCENTAGE',
     *     audienceSizeBins: list<int<1, 20000000>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
