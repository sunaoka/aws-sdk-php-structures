<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFarm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $farmId
 * @property string $displayName
 * @property string $description
 * @property string $kmsKeyArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class GetFarmResponse extends Response
{
}
