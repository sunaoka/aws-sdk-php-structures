<?php

namespace Sunaoka\Aws\Structures\Inspector\GetExclusionsPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTemplateArn
 * @property string $previewToken
 * @property string $nextToken
 * @property int $maxResults
 * @property 'EN_US' $locale
 */
class GetExclusionsPreviewRequest extends Request
{
    /**
     * @param array{
     *     assessmentTemplateArn: string,
     *     previewToken: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     locale?: 'EN_US'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
