<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateRecommendationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentArn
 * @property string $bucketName
 * @property string $clientToken
 * @property 'CfnYaml'|'CfnJson' $format
 * @property string $name
 * @property list<string> $recommendationIds
 * @property list<'Alarm'|'Sop'|'Test'> $recommendationTypes
 * @property array<string, string> $tags
 */
class CreateRecommendationTemplateRequest extends Request
{
    /**
     * @param array{
     *     assessmentArn: string,
     *     bucketName?: string,
     *     clientToken?: string,
     *     format?: 'CfnYaml'|'CfnJson',
     *     name: string,
     *     recommendationIds?: list<string>,
     *     recommendationTypes?: list<'Alarm'|'Sop'|'Test'>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
