<?php

namespace Sunaoka\Aws\Structures\Inspector\GetExclusionsPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTemplateArn
 * @property string $previewToken
 * @property string|null $nextToken
 * @property int|null $maxResults
 * @property 'EN_US'|null $locale
 */
class GetExclusionsPreviewRequest extends Request
{
    /**
     * @param array{
     *     assessmentTemplateArn: string,
     *     previewToken: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null,
     *     locale?: 'EN_US'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
