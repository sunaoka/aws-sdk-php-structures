<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListAvailableSolutionStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SolutionStackName
 * @property list<string> $PermittedFileTypes
 */
class SolutionStackDescription extends Shape
{
    /**
     * @param array{
     *     SolutionStackName?: string,
     *     PermittedFileTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
