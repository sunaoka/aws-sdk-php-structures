<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $baseScore
 * @property string|null $scoringVector
 * @property string|null $version
 * @property string|null $source
 */
class CvssScore extends Shape
{
    /**
     * @param array{
     *     baseScore?: double|null,
     *     scoringVector?: string|null,
     *     version?: string|null,
     *     source?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
