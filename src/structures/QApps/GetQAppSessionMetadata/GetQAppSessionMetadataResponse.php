<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSessionMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property string $sessionArn
 * @property string|null $sessionName
 * @property Shapes\SessionSharingConfiguration $sharingConfiguration
 * @property bool|null $sessionOwner
 */
class GetQAppSessionMetadataResponse extends Response
{
}
