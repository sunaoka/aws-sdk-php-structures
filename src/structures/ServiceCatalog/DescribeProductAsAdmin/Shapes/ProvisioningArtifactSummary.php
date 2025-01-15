<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductAsAdmin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property array<string, string>|null $ProvisioningArtifactMetadata
 */
class ProvisioningArtifactSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     ProvisioningArtifactMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
