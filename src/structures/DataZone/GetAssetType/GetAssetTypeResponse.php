<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $name
 * @property string $revision
 * @property string|null $description
 * @property array<string, Shapes\FormEntryOutput> $formsOutput
 * @property string $owningProjectId
 * @property string|null $originDomainId
 * @property string|null $originProjectId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetAssetTypeResponse extends Response
{
}
