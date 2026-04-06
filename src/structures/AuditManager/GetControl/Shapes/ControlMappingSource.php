<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceId
 * @property string|null $sourceName
 * @property string|null $sourceDescription
 * @property 'System_Controls_Mapping'|'Procedural_Controls_Mapping'|null $sourceSetUpOption
 * @property 'AWS_Cloudtrail'|'AWS_Config'|'AWS_Security_Hub'|'AWS_API_Call'|'MANUAL'|'Common_Control'|'Core_Control'|null $sourceType
 * @property SourceKeyword|null $sourceKeyword
 * @property 'DAILY'|'WEEKLY'|'MONTHLY'|null $sourceFrequency
 * @property string|null $troubleshootingText
 */
class ControlMappingSource extends Shape
{
    /**
     * @param array{
     *     sourceId?: string|null,
     *     sourceName?: string|null,
     *     sourceDescription?: string|null,
     *     sourceSetUpOption?: 'System_Controls_Mapping'|'Procedural_Controls_Mapping'|null,
     *     sourceType?: 'AWS_Cloudtrail'|'AWS_Config'|'AWS_Security_Hub'|'AWS_API_Call'|'MANUAL'|'Common_Control'|'Core_Control'|null,
     *     sourceKeyword?: SourceKeyword|null,
     *     sourceFrequency?: 'DAILY'|'WEEKLY'|'MONTHLY'|null,
     *     troubleshootingText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
