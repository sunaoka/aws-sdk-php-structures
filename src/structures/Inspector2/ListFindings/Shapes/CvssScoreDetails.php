<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CvssScoreAdjustment>|null $adjustments
 * @property string|null $cvssSource
 * @property double $score
 * @property string $scoreSource
 * @property string $scoringVector
 * @property string $version
 */
class CvssScoreDetails extends Shape
{
    /**
     * @param array{
     *     adjustments?: list<CvssScoreAdjustment>|null,
     *     cvssSource?: string|null,
     *     score: double,
     *     scoreSource: string,
     *     scoringVector: string,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
