<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property array<string, Shapes\FormEntryOutput> $formsOutput
 * @property string $name
 * @property string|null $originDomainId
 * @property string|null $originProjectId
 * @property string $owningProjectId
 * @property string $revision
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetAssetTypeResponse extends Response
{
}
