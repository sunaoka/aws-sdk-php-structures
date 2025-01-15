<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateDataSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'S3_SNAPSHOT'|'REDSHIFT_DATA_SHARE'|'API_GATEWAY_API'|'S3_DATA_ACCESS'|'LAKE_FORMATION_DATA_PERMISSION' $AssetType
 * @property string $Description
 * @property string $Name
 * @property array<string, string>|null $Tags
 */
class CreateDataSetRequest extends Request
{
    /**
     * @param array{
     *     AssetType: 'S3_SNAPSHOT'|'REDSHIFT_DATA_SHARE'|'API_GATEWAY_API'|'S3_DATA_ACCESS'|'LAKE_FORMATION_DATA_PERMISSION',
     *     Description: string,
     *     Name: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
