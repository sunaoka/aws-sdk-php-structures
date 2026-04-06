<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $relatedItemId
 * @property 'Contact'|'Comment'|'File'|'Sla'|'ConnectCase'|'Custom' $type
 * @property \Aws\Api\DateTimeResult $associationTime
 * @property RelatedItemContent $content
 * @property array<string, string>|null $tags
 * @property UserUnion|null $performedBy
 */
class SearchRelatedItemsResponseItem extends Shape
{
    /**
     * @param array{
     *     relatedItemId: string,
     *     type: 'Contact'|'Comment'|'File'|'Sla'|'ConnectCase'|'Custom',
     *     associationTime: \Aws\Api\DateTimeResult,
     *     content: RelatedItemContent,
     *     tags?: array<string, string>|null,
     *     performedBy?: UserUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
