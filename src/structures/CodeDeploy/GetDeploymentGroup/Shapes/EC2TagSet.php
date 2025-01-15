<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<EC2TagFilter>>|null $ec2TagSetList
 */
class EC2TagSet extends Shape
{
    /**
     * @param array{ec2TagSetList?: list<list<EC2TagFilter>>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
