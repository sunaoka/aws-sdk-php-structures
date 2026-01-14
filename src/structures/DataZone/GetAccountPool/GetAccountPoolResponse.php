<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAccountPool;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $domainId
 * @property string|null $name
 * @property string|null $id
 * @property string|null $description
 * @property 'MANUAL'|null $resolutionStrategy
 * @property Shapes\AccountSource $accountSource
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $updatedBy
 * @property string|null $domainUnitId
 */
class GetAccountPoolResponse extends Response
{
}
