<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateRelatedItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $caseId
 * @property string $relatedItemId
 * @property Shapes\RelatedItemUpdateContent $content
 * @property Shapes\UserUnion|null $performedBy
 */
class UpdateRelatedItemRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     caseId: string,
     *     relatedItemId: string,
     *     content: Shapes\RelatedItemUpdateContent,
     *     performedBy?: Shapes\UserUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
