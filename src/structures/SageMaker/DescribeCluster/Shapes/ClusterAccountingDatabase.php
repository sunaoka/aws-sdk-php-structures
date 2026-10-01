<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Endpoint
 * @property int<1, 65535>|null $Port
 * @property string|null $Name
 * @property string $SecretArn
 */
class ClusterAccountingDatabase extends Shape
{
    /**
     * @param array{
     *     Endpoint: string,
     *     Port?: int<1, 65535>|null,
     *     Name?: string|null,
     *     SecretArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
