<?php

namespace Sunaoka\Aws\Structures\DataZone\GetGlossary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string $owningProjectId
 * @property 'DISABLED'|'ENABLED' $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetGlossaryResponse extends Response
{
}
