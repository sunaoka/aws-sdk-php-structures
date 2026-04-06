<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetFilter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $domainId
 * @property string $assetId
 * @property string $name
 * @property string|null $description
 * @property 'VALID'|'INVALID'|null $status
 * @property Shapes\AssetFilterConfiguration $configuration
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $errorMessage
 * @property list<string>|null $effectiveColumnNames
 * @property string|null $effectiveRowFilter
 */
class GetAssetFilterResponse extends Response
{
}
