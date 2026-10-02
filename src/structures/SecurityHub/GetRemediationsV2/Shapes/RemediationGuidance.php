<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetTypeName
 * @property string $Pattern
 * @property string $Version
 * @property RemediationGuidanceContext $Context
 * @property RemediationGuidanceSpecification $Specification
 * @property RemediationGuidanceExamples $Examples
 * @property RemediationGuidanceMetadata $Metadata
 */
class RemediationGuidance extends Shape
{
    /**
     * @param array{
     *     TargetTypeName: string,
     *     Pattern: string,
     *     Version: string,
     *     Context: RemediationGuidanceContext,
     *     Specification: RemediationGuidanceSpecification,
     *     Examples: RemediationGuidanceExamples,
     *     Metadata: RemediationGuidanceMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
