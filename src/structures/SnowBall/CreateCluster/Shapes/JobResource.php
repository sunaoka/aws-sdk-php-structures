<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<S3Resource>|null $S3Resources
 * @property list<LambdaResource>|null $LambdaResources
 * @property list<Ec2AmiResource>|null $Ec2AmiResources
 */
class JobResource extends Shape
{
    /**
     * @param array{
     *     S3Resources?: list<S3Resource>|null,
     *     LambdaResources?: list<LambdaResource>|null,
     *     Ec2AmiResources?: list<Ec2AmiResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
