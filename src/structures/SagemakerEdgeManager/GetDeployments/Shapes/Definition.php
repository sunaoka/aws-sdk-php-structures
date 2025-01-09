<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\GetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelHandle
 * @property string $S3Url
 * @property Checksum $Checksum
 * @property 'DEPLOY'|'UNDEPLOY' $State
 */
class Definition extends Shape
{
    /**
     * @param array{
     *     ModelHandle?: string,
     *     S3Url?: string,
     *     Checksum?: Checksum,
     *     State?: 'DEPLOY'|'UNDEPLOY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
