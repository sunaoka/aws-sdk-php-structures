<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KMSArn
 * @property string|null $outputS3Path
 * @property list<OutputAttribute> $output
 * @property bool|null $applyNormalization
 * @property CustomerProfilesIntegrationConfig|null $customerProfilesIntegrationConfig
 */
class OutputSource extends Shape
{
    /**
     * @param array{
     *     KMSArn?: string|null,
     *     outputS3Path?: string|null,
     *     output: list<OutputAttribute>,
     *     applyNormalization?: bool|null,
     *     customerProfilesIntegrationConfig?: CustomerProfilesIntegrationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
