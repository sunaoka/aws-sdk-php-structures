<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQAppSessionMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $sessionId
 * @property string $sessionName
 * @property Shapes\SessionSharingConfiguration $sharingConfiguration
 */
class UpdateQAppSessionMetadataRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     sessionId: string,
     *     sessionName?: string,
     *     sharingConfiguration: Shapes\SessionSharingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
