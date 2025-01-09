<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeJournalS3Export;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ExportId
 */
class DescribeJournalS3ExportRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ExportId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
