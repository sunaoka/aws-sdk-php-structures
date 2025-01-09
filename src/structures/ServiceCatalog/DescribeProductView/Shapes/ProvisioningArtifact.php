<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property 'DEFAULT'|'DEPRECATED' $Guidance
 */
class ProvisioningArtifact extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Guidance?: 'DEFAULT'|'DEPRECATED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
