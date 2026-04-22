<?php

namespace Sunaoka\Aws\Structures\IVS\BatchStartViewerSessionRevocation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $accessControlAllowOrigin
 * @property string|null $accessControlExposeHeaders
 * @property string|null $cacheControl
 * @property string|null $contentSecurityPolicy
 * @property string|null $strictTransportSecurity
 * @property string|null $xContentTypeOptions
 * @property string|null $xFrameOptions
 * @property list<Shapes\BatchStartViewerSessionRevocationError>|null $errors
 */
class BatchStartViewerSessionRevocationResponse extends Response
{
}
