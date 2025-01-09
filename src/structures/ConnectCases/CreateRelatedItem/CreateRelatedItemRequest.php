<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property Shapes\RelatedItemInputContent $content
 * @property string $domainId
 * @property Shapes\UserUnion $performedBy
 * @property 'Contact'|'Comment'|'File' $type
 */
class CreateRelatedItemRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     content: Shapes\RelatedItemInputContent,
     *     domainId: string,
     *     performedBy?: Shapes\UserUnion,
     *     type: 'Contact'|'Comment'|'File'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
