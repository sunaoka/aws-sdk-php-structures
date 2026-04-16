<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property 'CREATED'|'ASSOCIATED'|'PENDING_DELETION'|'DELETED'|null $FeedManagementState
 */
class ElementalInferenceFeed extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     FeedManagementState?: 'CREATED'|'ASSOCIATED'|'PENDING_DELETION'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
