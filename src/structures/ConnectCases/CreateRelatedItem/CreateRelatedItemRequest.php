<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property Shapes\RelatedItemInputContent $content
 * @property string $domainId
 * @property Shapes\UserUnion|null $performedBy
 * @property 'Contact'|'Comment'|'File'|'Sla' $type
 */
class CreateRelatedItemRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     content: Shapes\RelatedItemInputContent,
     *     domainId: string,
     *     performedBy?: Shapes\UserUnion|null,
     *     type: 'Contact'|'Comment'|'File'|'Sla'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
