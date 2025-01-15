<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListRecommendationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appArn
 * @property string $assessmentArn
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'CfnYaml'|'CfnJson' $format
 * @property string|null $message
 * @property string $name
 * @property bool|null $needsReplacements
 * @property list<string>|null $recommendationIds
 * @property string $recommendationTemplateArn
 * @property list<'Alarm'|'Sop'|'Test'> $recommendationTypes
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 * @property array<string, string>|null $tags
 * @property S3Location|null $templatesLocation
 */
class RecommendationTemplate extends Shape
{
    /**
     * @param array{
     *     appArn?: string|null,
     *     assessmentArn: string,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     format: 'CfnYaml'|'CfnJson',
     *     message?: string|null,
     *     name: string,
     *     needsReplacements?: bool|null,
     *     recommendationIds?: list<string>|null,
     *     recommendationTemplateArn: string,
     *     recommendationTypes: list<'Alarm'|'Sop'|'Test'>,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     status: 'Pending'|'InProgress'|'Failed'|'Success',
     *     tags?: array<string, string>|null,
     *     templatesLocation?: S3Location|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
