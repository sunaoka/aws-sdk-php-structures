<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $baseScore
 * @property string $scoringVector
 * @property string $version
 * @property string $source
 */
class CvssScore extends Shape
{
    /**
     * @param array{
     *     baseScore?: double,
     *     scoringVector?: string,
     *     version?: string,
     *     source?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
