<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchCreateRelatedItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property Shapes\RelatedItemInputContent $content
 * @property list<Shapes\BatchCreateRelatedItemIdentifier> $cases
 * @property Shapes\UserUnion|null $performedBy
 * @property string|null $clientToken
 */
class BatchCreateRelatedItemRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     content: Shapes\RelatedItemInputContent,
     *     cases: list<Shapes\BatchCreateRelatedItemIdentifier>,
     *     performedBy?: Shapes\UserUnion|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
