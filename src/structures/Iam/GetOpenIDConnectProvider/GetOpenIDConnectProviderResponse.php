<?php

namespace Sunaoka\Aws\Structures\Iam\GetOpenIDConnectProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Url
 * @property list<string>|null $ClientIDList
 * @property list<string>|null $ThumbprintList
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property list<Shapes\Tag>|null $Tags
 */
class GetOpenIDConnectProviderResponse extends Response
{
}
