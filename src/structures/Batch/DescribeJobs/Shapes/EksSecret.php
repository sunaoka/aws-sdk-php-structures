<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretName
 * @property bool $optional
 */
class EksSecret extends Shape
{
    /**
     * @param array{
     *     secretName: string,
     *     optional?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
