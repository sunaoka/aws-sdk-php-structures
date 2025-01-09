<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Description
 */
class ProvisioningArtifactOutput extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
