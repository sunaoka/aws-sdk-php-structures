<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateModelCard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelCardName
 * @property string|null $Content
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived'|null $ModelCardStatus
 */
class UpdateModelCardRequest extends Request
{
    /**
     * @param array{
     *     ModelCardName: string,
     *     Content?: string|null,
     *     ModelCardStatus?: 'Draft'|'PendingReview'|'Approved'|'Archived'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
