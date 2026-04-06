<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchAllRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $relatedItemId
 * @property string $caseId
 * @property 'Contact'|'Comment'|'File'|'Sla'|'ConnectCase'|'Custom' $type
 * @property \Aws\Api\DateTimeResult $associationTime
 * @property RelatedItemContent $content
 * @property UserUnion|null $performedBy
 * @property array<string, string>|null $tags
 */
class SearchAllRelatedItemsResponseItem extends Shape
{
    /**
     * @param array{
     *     relatedItemId: string,
     *     caseId: string,
     *     type: 'Contact'|'Comment'|'File'|'Sla'|'ConnectCase'|'Custom',
     *     associationTime: \Aws\Api\DateTimeResult,
     *     content: RelatedItemContent,
     *     performedBy?: UserUnion|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
