<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scoreSource
 * @property string|null $cvssSource
 * @property string|null $version
 * @property double|null $score
 * @property string|null $scoringVector
 * @property list<CvssScoreAdjustment>|null $adjustments
 */
class CvssScoreDetails extends Shape
{
    /**
     * @param array{
     *     scoreSource?: string|null,
     *     cvssSource?: string|null,
     *     version?: string|null,
     *     score?: double|null,
     *     scoringVector?: string|null,
     *     adjustments?: list<CvssScoreAdjustment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
