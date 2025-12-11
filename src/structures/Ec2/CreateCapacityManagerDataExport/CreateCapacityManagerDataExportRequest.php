<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityManagerDataExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $S3BucketName
 * @property string|null $S3BucketPrefix
 * @property 'hourly' $Schedule
 * @property 'csv'|'parquet' $OutputFormat
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateCapacityManagerDataExportRequest extends Request
{
    /**
     * @param array{
     *     S3BucketName: string,
     *     S3BucketPrefix?: string|null,
     *     Schedule: 'hourly',
     *     OutputFormat: 'csv'|'parquet',
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
