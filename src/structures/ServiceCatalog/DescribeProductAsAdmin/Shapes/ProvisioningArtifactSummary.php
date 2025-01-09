<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductAsAdmin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property array<string, string> $ProvisioningArtifactMetadata
 */
class ProvisioningArtifactSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     ProvisioningArtifactMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
