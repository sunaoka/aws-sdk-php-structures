<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $name
 * @property string $revision
 * @property string|null $description
 * @property array<string, Shapes\FormEntryOutput> $formsOutput
 * @property string|null $owningProjectId
 * @property string|null $originDomainId
 * @property string|null $originProjectId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class CreateAssetTypeResponse extends Response
{
}
