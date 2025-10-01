<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $caseId
 * @property 'Contact'|'Comment'|'File'|'Sla'|'ConnectCase'|'Custom' $type
 * @property Shapes\RelatedItemInputContent $content
 * @property Shapes\UserUnion|null $performedBy
 */
class CreateRelatedItemRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     caseId: string,
     *     type: 'Contact'|'Comment'|'File'|'Sla'|'ConnectCase'|'Custom',
     *     content: Shapes\RelatedItemInputContent,
     *     performedBy?: Shapes\UserUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
