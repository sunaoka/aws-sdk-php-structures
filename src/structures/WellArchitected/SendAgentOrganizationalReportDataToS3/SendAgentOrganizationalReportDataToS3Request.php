<?php

namespace Sunaoka\Aws\Structures\WellArchitected\SendAgentOrganizationalReportDataToS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 * @property 'CSV'|'JSON'|'PARQUET' $format
 * @property string $bucketArn
 * @property string $objectKey
 */
class SendAgentOrganizationalReportDataToS3Request extends Request
{
    /**
     * @param array{
     *     reportId: string,
     *     format: 'CSV'|'JSON'|'PARQUET',
     *     bucketArn: string,
     *     objectKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
