<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListAvailableSolutionStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SolutionStackName
 * @property list<string>|null $PermittedFileTypes
 */
class SolutionStackDescription extends Shape
{
    /**
     * @param array{
     *     SolutionStackName?: string|null,
     *     PermittedFileTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
