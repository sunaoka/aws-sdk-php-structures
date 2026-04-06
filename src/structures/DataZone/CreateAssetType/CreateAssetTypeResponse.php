<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetType;

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
 * @property string|null $owningProjectId
 * @property string $revision
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class CreateAssetTypeResponse extends Response
{
}
