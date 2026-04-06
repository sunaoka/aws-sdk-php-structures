<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property Shapes\ResponseDetails|null $Details
 * @property list<Shapes\JobError>|null $Errors
 * @property string|null $Id
 * @property 'WAITING'|'IN_PROGRESS'|'ERROR'|'COMPLETED'|'CANCELLED'|'TIMED_OUT'|null $State
 * @property 'IMPORT_ASSETS_FROM_S3'|'IMPORT_ASSET_FROM_SIGNED_URL'|'EXPORT_ASSETS_TO_S3'|'EXPORT_ASSET_TO_SIGNED_URL'|'EXPORT_REVISIONS_TO_S3'|'IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES'|'IMPORT_ASSET_FROM_API_GATEWAY_API'|'CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET'|'IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY'|null $Type
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class GetJobResponse extends Response
{
}
