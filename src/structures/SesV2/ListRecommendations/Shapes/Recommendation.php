<?php

namespace Sunaoka\Aws\Structures\SesV2\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property 'DKIM'|'DMARC'|'SPF'|'BIMI'|'COMPLAINT'|null $Type
 * @property string|null $Description
 * @property 'OPEN'|'FIXED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property 'LOW'|'HIGH'|null $Impact
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     Type?: 'DKIM'|'DMARC'|'SPF'|'BIMI'|'COMPLAINT'|null,
     *     Description?: string|null,
     *     Status?: 'OPEN'|'FIXED'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Impact?: 'LOW'|'HIGH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
