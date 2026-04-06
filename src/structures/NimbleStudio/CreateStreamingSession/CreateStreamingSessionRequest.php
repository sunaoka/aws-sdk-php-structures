<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateStreamingSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'g4dn.xlarge'|'g4dn.2xlarge'|'g4dn.4xlarge'|'g4dn.8xlarge'|'g4dn.12xlarge'|'g4dn.16xlarge'|'g3.4xlarge'|'g3s.xlarge'|'g5.xlarge'|'g5.2xlarge'|'g5.4xlarge'|'g5.8xlarge'|'g5.16xlarge'|null $ec2InstanceType
 * @property string $launchProfileId
 * @property string|null $ownedBy
 * @property string|null $streamingImageId
 * @property string $studioId
 * @property array<string, string>|null $tags
 */
class CreateStreamingSessionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     ec2InstanceType?: 'g4dn.xlarge'|'g4dn.2xlarge'|'g4dn.4xlarge'|'g4dn.8xlarge'|'g4dn.12xlarge'|'g4dn.16xlarge'|'g3.4xlarge'|'g3s.xlarge'|'g5.xlarge'|'g5.2xlarge'|'g5.4xlarge'|'g5.8xlarge'|'g5.16xlarge'|null,
     *     launchProfileId: string,
     *     ownedBy?: string|null,
     *     streamingImageId?: string|null,
     *     studioId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
