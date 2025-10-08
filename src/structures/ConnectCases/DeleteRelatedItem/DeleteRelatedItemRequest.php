<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteRelatedItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $caseId
 * @property string $relatedItemId
 */
class DeleteRelatedItemRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     caseId: string,
     *     relatedItemId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
