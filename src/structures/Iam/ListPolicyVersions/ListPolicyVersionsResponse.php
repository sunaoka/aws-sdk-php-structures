<?php

namespace Sunaoka\Aws\Structures\Iam\ListPolicyVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\PolicyVersion>|null $Versions
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 */
class ListPolicyVersionsResponse extends Response
{
}
