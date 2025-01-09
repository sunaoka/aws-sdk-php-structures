<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RequestDetails $Details
 * @property 'IMPORT_ASSETS_FROM_S3'|'IMPORT_ASSET_FROM_SIGNED_URL'|'EXPORT_ASSETS_TO_S3'|'EXPORT_ASSET_TO_SIGNED_URL'|'EXPORT_REVISIONS_TO_S3'|'IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES'|'IMPORT_ASSET_FROM_API_GATEWAY_API'|'CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET'|'IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY' $Type
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     Details: Shapes\RequestDetails,
     *     Type: 'IMPORT_ASSETS_FROM_S3'|'IMPORT_ASSET_FROM_SIGNED_URL'|'EXPORT_ASSETS_TO_S3'|'EXPORT_ASSET_TO_SIGNED_URL'|'EXPORT_REVISIONS_TO_S3'|'IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES'|'IMPORT_ASSET_FROM_API_GATEWAY_API'|'CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET'|'IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
