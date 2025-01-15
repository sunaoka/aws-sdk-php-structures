<?php

namespace Sunaoka\Aws\Structures\Iam\ListAccessKeys;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AccessKeyMetadata> $AccessKeyMetadata
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 */
class ListAccessKeysResponse extends Response
{
}
