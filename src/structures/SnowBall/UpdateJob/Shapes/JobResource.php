<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<S3Resource> $S3Resources
 * @property list<LambdaResource> $LambdaResources
 * @property list<Ec2AmiResource> $Ec2AmiResources
 */
class JobResource extends Shape
{
    /**
     * @param array{
     *     S3Resources?: list<S3Resource>,
     *     LambdaResources?: list<LambdaResource>,
     *     Ec2AmiResources?: list<Ec2AmiResource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
