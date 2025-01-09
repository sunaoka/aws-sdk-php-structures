<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceName
 * @property string $sourceDescription
 * @property 'System_Controls_Mapping'|'Procedural_Controls_Mapping' $sourceSetUpOption
 * @property 'AWS_Cloudtrail'|'AWS_Config'|'AWS_Security_Hub'|'AWS_API_Call'|'MANUAL'|'Common_Control'|'Core_Control' $sourceType
 * @property SourceKeyword $sourceKeyword
 * @property 'DAILY'|'WEEKLY'|'MONTHLY' $sourceFrequency
 * @property string $troubleshootingText
 */
class CreateControlMappingSource extends Shape
{
    /**
     * @param array{
     *     sourceName?: string,
     *     sourceDescription?: string,
     *     sourceSetUpOption?: 'System_Controls_Mapping'|'Procedural_Controls_Mapping',
     *     sourceType?: 'AWS_Cloudtrail'|'AWS_Config'|'AWS_Security_Hub'|'AWS_API_Call'|'MANUAL'|'Common_Control'|'Core_Control',
     *     sourceKeyword?: SourceKeyword,
     *     sourceFrequency?: 'DAILY'|'WEEKLY'|'MONTHLY',
     *     troubleshootingText?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
