<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAccountPool;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AccountSource $accountSource
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string|null $domainId
 * @property string|null $domainUnitId
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property 'MANUAL'|null $resolutionStrategy
 * @property string|null $updatedBy
 */
class GetAccountPoolResponse extends Response
{
}
