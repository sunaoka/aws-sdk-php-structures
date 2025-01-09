<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property Shapes\ResponseDetails $Details
 * @property list<Shapes\JobError> $Errors
 * @property string $Id
 * @property 'WAITING'|'IN_PROGRESS'|'ERROR'|'COMPLETED'|'CANCELLED'|'TIMED_OUT' $State
 * @property 'IMPORT_ASSETS_FROM_S3'|'IMPORT_ASSET_FROM_SIGNED_URL'|'EXPORT_ASSETS_TO_S3'|'EXPORT_ASSET_TO_SIGNED_URL'|'EXPORT_REVISIONS_TO_S3'|'IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES'|'IMPORT_ASSET_FROM_API_GATEWAY_API'|'CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET'|'IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY' $Type
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class CreateJobResponse extends Response
{
}
