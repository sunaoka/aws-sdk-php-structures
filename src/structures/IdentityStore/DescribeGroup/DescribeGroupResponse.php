<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GroupId
 * @property string|null $DisplayName
 * @property list<Shapes\ExternalId>|null $ExternalIds
 * @property string|null $Description
 * @property string $IdentityStoreId
 */
class DescribeGroupResponse extends Response
{
}
