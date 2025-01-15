<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretName
 * @property bool|null $optional
 */
class EksSecret extends Shape
{
    /**
     * @param array{
     *     secretName: string,
     *     optional?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
