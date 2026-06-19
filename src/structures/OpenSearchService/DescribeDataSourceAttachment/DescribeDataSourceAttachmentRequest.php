<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDataSourceAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $dataSourceArn
 */
class DescribeDataSourceAttachmentRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     dataSourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
