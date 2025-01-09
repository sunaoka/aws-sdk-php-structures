<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\UpdateConfiguredAudienceModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ABSOLUTE'|'PERCENTAGE' $audienceSizeType
 * @property list<int> $audienceSizeBins
 */
class AudienceSizeConfig extends Shape
{
    /**
     * @param array{
     *     audienceSizeType: 'ABSOLUTE'|'PERCENTAGE',
     *     audienceSizeBins: list<int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
