<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAccessPreviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $analyzerArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'COMPLETED'|'CREATING'|'FAILED' $status
 * @property AccessPreviewStatusReason|null $statusReason
 */
class AccessPreviewSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     analyzerArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     status: 'COMPLETED'|'CREATING'|'FAILED',
     *     statusReason?: AccessPreviewStatusReason|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
