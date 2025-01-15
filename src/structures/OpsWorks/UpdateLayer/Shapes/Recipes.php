<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateLayer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Setup
 * @property list<string>|null $Configure
 * @property list<string>|null $Deploy
 * @property list<string>|null $Undeploy
 * @property list<string>|null $Shutdown
 */
class Recipes extends Shape
{
    /**
     * @param array{
     *     Setup?: list<string>|null,
     *     Configure?: list<string>|null,
     *     Deploy?: list<string>|null,
     *     Undeploy?: list<string>|null,
     *     Shutdown?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
