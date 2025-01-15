<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateRecommendationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentArn
 * @property string|null $bucketName
 * @property string|null $clientToken
 * @property 'CfnYaml'|'CfnJson'|null $format
 * @property string $name
 * @property list<string>|null $recommendationIds
 * @property list<'Alarm'|'Sop'|'Test'>|null $recommendationTypes
 * @property array<string, string>|null $tags
 */
class CreateRecommendationTemplateRequest extends Request
{
    /**
     * @param array{
     *     assessmentArn: string,
     *     bucketName?: string|null,
     *     clientToken?: string|null,
     *     format?: 'CfnYaml'|'CfnJson'|null,
     *     name: string,
     *     recommendationIds?: list<string>|null,
     *     recommendationTypes?: list<'Alarm'|'Sop'|'Test'>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
