<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetFilter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assetId
 * @property Shapes\AssetFilterConfiguration $configuration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $domainId
 * @property list<string> $effectiveColumnNames
 * @property string $effectiveRowFilter
 * @property string $errorMessage
 * @property string $id
 * @property string $name
 * @property 'VALID'|'INVALID' $status
 */
class GetAssetFilterResponse extends Response
{
}
