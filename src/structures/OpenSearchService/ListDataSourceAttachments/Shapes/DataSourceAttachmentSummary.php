<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDataSourceAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $attachmentId
 * @property string|null $dataSourceArn
 * @property 'PENDING'|'ATTACHED'|'FAILED'|null $status
 */
class DataSourceAttachmentSummary extends Shape
{
    /**
     * @param array{
     *     attachmentId?: string|null,
     *     dataSourceArn?: string|null,
     *     status?: 'PENDING'|'ATTACHED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
