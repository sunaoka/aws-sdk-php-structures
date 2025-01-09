<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateSipMediaApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsRegion
 * @property string $Name
 * @property list<Shapes\SipMediaApplicationEndpoint> $Endpoints
 * @property list<Shapes\Tag> $Tags
 */
class CreateSipMediaApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsRegion: string,
     *     Name: string,
     *     Endpoints: list<Shapes\SipMediaApplicationEndpoint>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
