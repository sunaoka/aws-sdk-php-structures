<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDesignation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property 'MANAGED'|'USER_CREATED' $designationType
 * @property string $policy
 * @property bool $deletionProtection
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class GetDesignationResponse extends Response
{
}
