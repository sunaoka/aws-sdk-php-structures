<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $queryText
 * @property Shapes\ContentSource $contentSource
 * @property Shapes\AttributeFilter|null $attributeFilter
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class SearchRelevantContentRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     queryText: string,
     *     contentSource: Shapes\ContentSource,
     *     attributeFilter?: Shapes\AttributeFilter|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
