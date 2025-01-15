<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocumentPermission;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $AccountIds
 * @property list<Shapes\AccountSharingInfo>|null $AccountSharingInfoList
 * @property string|null $NextToken
 */
class DescribeDocumentPermissionResponse extends Response
{
}
