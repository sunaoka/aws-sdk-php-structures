<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property Shapes\RelatedItemInputContent $content
 * @property string $domainId
 * @property 'Contact'|'Comment' $type
 */
class CreateRelatedItemRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     content: Shapes\RelatedItemInputContent,
     *     domainId: string,
     *     type: 'Contact'|'Comment'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
