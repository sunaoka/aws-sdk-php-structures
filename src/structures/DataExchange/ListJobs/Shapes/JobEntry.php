<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property ResponseDetails $Details
 * @property list<JobError>|null $Errors
 * @property string $Id
 * @property 'WAITING'|'IN_PROGRESS'|'ERROR'|'COMPLETED'|'CANCELLED'|'TIMED_OUT' $State
 * @property 'IMPORT_ASSETS_FROM_S3'|'IMPORT_ASSET_FROM_SIGNED_URL'|'EXPORT_ASSETS_TO_S3'|'EXPORT_ASSET_TO_SIGNED_URL'|'EXPORT_REVISIONS_TO_S3'|'IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES'|'IMPORT_ASSET_FROM_API_GATEWAY_API'|'CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET'|'IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY' $Type
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class JobEntry extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     Details: ResponseDetails,
     *     Errors?: list<JobError>|null,
     *     Id: string,
     *     State: 'WAITING'|'IN_PROGRESS'|'ERROR'|'COMPLETED'|'CANCELLED'|'TIMED_OUT',
     *     Type: 'IMPORT_ASSETS_FROM_S3'|'IMPORT_ASSET_FROM_SIGNED_URL'|'EXPORT_ASSETS_TO_S3'|'EXPORT_ASSET_TO_SIGNED_URL'|'EXPORT_REVISIONS_TO_S3'|'IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES'|'IMPORT_ASSET_FROM_API_GATEWAY_API'|'CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET'|'IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY',
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
