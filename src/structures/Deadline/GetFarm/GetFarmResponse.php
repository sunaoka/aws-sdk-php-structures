<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFarm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $farmId
 * @property string $displayName
 * @property string|null $description
 * @property string $kmsKeyArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetFarmResponse extends Response
{
}
