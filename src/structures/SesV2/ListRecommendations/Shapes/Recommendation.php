<?php

namespace Sunaoka\Aws\Structures\SesV2\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property 'DKIM'|'DMARC'|'SPF'|'BIMI' $Type
 * @property string $Description
 * @property 'OPEN'|'FIXED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property 'LOW'|'HIGH' $Impact
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     Type?: 'DKIM'|'DMARC'|'SPF'|'BIMI',
     *     Description?: string,
     *     Status?: 'OPEN'|'FIXED',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     Impact?: 'LOW'|'HIGH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
