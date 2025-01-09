<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GroupId
 * @property string $DisplayName
 * @property list<Shapes\ExternalId> $ExternalIds
 * @property string $Description
 * @property string $IdentityStoreId
 */
class DescribeGroupResponse extends Response
{
}
