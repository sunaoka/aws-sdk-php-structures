<?php

namespace Sunaoka\Aws\Structures\Iam\GetOpenIDConnectProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Url
 * @property list<string> $ClientIDList
 * @property list<string> $ThumbprintList
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property list<Shapes\Tag> $Tags
 */
class GetOpenIDConnectProviderResponse extends Response
{
}
