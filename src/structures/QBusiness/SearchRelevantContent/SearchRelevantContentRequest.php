<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $queryText
 * @property Shapes\ContentSource $contentSource
 * @property Shapes\AttributeFilter $attributeFilter
 * @property int $maxResults
 * @property string $nextToken
 */
class SearchRelevantContentRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     queryText: string,
     *     contentSource: Shapes\ContentSource,
     *     attributeFilter?: Shapes\AttributeFilter,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
