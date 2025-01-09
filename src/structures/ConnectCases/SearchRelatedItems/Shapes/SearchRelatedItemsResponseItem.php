<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $associationTime
 * @property RelatedItemContent $content
 * @property UserUnion $performedBy
 * @property string $relatedItemId
 * @property array<string, string> $tags
 * @property 'Contact'|'Comment'|'File' $type
 */
class SearchRelatedItemsResponseItem extends Shape
{
    /**
     * @param array{
     *     associationTime: \Aws\Api\DateTimeResult,
     *     content: RelatedItemContent,
     *     performedBy?: UserUnion,
     *     relatedItemId: string,
     *     tags?: array<string, string>,
     *     type: 'Contact'|'Comment'|'File'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
