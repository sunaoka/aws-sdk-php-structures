<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExtractionDefinitionId
 * @property string $ExtractionDefinitionName
 * @property string|null $ExtractionDefinitionDisplayLabel
 * @property list<ExtractedInformationValue>|null $ExtractedValues
 * @property 'QUOTA_EXCEEDED'|'INSUFFICIENT_CONVERSATION_CONTENT'|'FAILED_SAFETY_GUIDELINES'|'INTERNAL_ERROR'|'MAX_PACKAGE_FEATURE_ONLY'|null $FailureCode
 */
class ExtractedInformation extends Shape
{
    /**
     * @param array{
     *     ExtractionDefinitionId: string,
     *     ExtractionDefinitionName: string,
     *     ExtractionDefinitionDisplayLabel?: string|null,
     *     ExtractedValues?: list<ExtractedInformationValue>|null,
     *     FailureCode?: 'QUOTA_EXCEEDED'|'INSUFFICIENT_CONVERSATION_CONTENT'|'FAILED_SAFETY_GUIDELINES'|'INTERNAL_ERROR'|'MAX_PACKAGE_FEATURE_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
