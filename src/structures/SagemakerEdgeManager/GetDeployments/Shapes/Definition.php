<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\GetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelHandle
 * @property string|null $S3Url
 * @property Checksum|null $Checksum
 * @property 'DEPLOY'|'UNDEPLOY'|null $State
 */
class Definition extends Shape
{
    /**
     * @param array{
     *     ModelHandle?: string|null,
     *     S3Url?: string|null,
     *     Checksum?: Checksum|null,
     *     State?: 'DEPLOY'|'UNDEPLOY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
