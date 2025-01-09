<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListRecommendationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appArn
 * @property string $assessmentArn
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'CfnYaml'|'CfnJson' $format
 * @property string $message
 * @property string $name
 * @property bool $needsReplacements
 * @property list<string> $recommendationIds
 * @property string $recommendationTemplateArn
 * @property list<'Alarm'|'Sop'|'Test'> $recommendationTypes
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 * @property array<string, string> $tags
 * @property S3Location $templatesLocation
 */
class RecommendationTemplate extends Shape
{
    /**
     * @param array{
     *     appArn?: string,
     *     assessmentArn: string,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     format: 'CfnYaml'|'CfnJson',
     *     message?: string,
     *     name: string,
     *     needsReplacements?: bool,
     *     recommendationIds?: list<string>,
     *     recommendationTemplateArn: string,
     *     recommendationTypes: list<'Alarm'|'Sop'|'Test'>,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     status: 'Pending'|'InProgress'|'Failed'|'Success',
     *     tags?: array<string, string>,
     *     templatesLocation?: S3Location
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
