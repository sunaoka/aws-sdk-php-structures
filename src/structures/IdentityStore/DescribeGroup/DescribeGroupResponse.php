<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GroupId
 * @property string|null $DisplayName
 * @property list<Shapes\ExternalId>|null $ExternalIds
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $CreatedBy
 * @property string|null $UpdatedBy
 * @property string $IdentityStoreId
 */
class DescribeGroupResponse extends Response
{
}
