<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<TagFilter>> $onPremisesTagSetList
 */
class OnPremisesTagSet extends Shape
{
    /**
     * @param array{onPremisesTagSetList?: list<list<TagFilter>>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
