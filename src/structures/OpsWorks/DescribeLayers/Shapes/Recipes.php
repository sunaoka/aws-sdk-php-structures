<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLayers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Setup
 * @property list<string> $Configure
 * @property list<string> $Deploy
 * @property list<string> $Undeploy
 * @property list<string> $Shutdown
 */
class Recipes extends Shape
{
    /**
     * @param array{
     *     Setup?: list<string>,
     *     Configure?: list<string>,
     *     Deploy?: list<string>,
     *     Undeploy?: list<string>,
     *     Shutdown?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
