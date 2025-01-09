<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIngestion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DataSetId
 * @property string $IngestionId
 */
class DescribeIngestionRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DataSetId: string,
     *     IngestionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
