<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scoreSource
 * @property string|null $cvssSource
 * @property string $version
 * @property double $score
 * @property string $scoringVector
 * @property list<CvssScoreAdjustment>|null $adjustments
 */
class CvssScoreDetails extends Shape
{
    /**
     * @param array{
     *     scoreSource: string,
     *     cvssSource?: string|null,
     *     version: string,
     *     score: double,
     *     scoringVector: string,
     *     adjustments?: list<CvssScoreAdjustment>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
