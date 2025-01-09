<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateModelCard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelCardName
 * @property string $Content
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived' $ModelCardStatus
 */
class UpdateModelCardRequest extends Request
{
    /**
     * @param array{
     *     ModelCardName: string,
     *     Content?: string,
     *     ModelCardStatus?: 'Draft'|'PendingReview'|'Approved'|'Archived'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
