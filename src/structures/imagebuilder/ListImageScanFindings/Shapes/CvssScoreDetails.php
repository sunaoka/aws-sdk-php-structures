<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scoreSource
 * @property string $cvssSource
 * @property string $version
 * @property double $score
 * @property string $scoringVector
 * @property list<CvssScoreAdjustment> $adjustments
 */
class CvssScoreDetails extends Shape
{
    /**
     * @param array{
     *     scoreSource?: string,
     *     cvssSource?: string,
     *     version?: string,
     *     score?: double,
     *     scoringVector?: string,
     *     adjustments?: list<CvssScoreAdjustment>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
