<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAccountDataRetention;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'default'|'none'|'provider_data_share'|'inherit' $mode
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetAccountDataRetentionResponse extends Response
{
}
