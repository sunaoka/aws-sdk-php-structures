<?php

namespace Sunaoka\Aws\Structures\IVS\BatchGetStreamKey;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $accessControlAllowOrigin
 * @property string|null $accessControlExposeHeaders
 * @property string|null $cacheControl
 * @property string|null $contentSecurityPolicy
 * @property string|null $strictTransportSecurity
 * @property string|null $xContentTypeOptions
 * @property string|null $xFrameOptions
 * @property list<Shapes\StreamKey>|null $streamKeys
 * @property list<Shapes\BatchError>|null $errors
 */
class BatchGetStreamKeyResponse extends Response
{
}
