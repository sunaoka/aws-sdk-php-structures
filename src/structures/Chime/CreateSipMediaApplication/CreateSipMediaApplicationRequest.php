<?php

namespace Sunaoka\Aws\Structures\Chime\CreateSipMediaApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsRegion
 * @property string $Name
 * @property list<Shapes\SipMediaApplicationEndpoint> $Endpoints
 */
class CreateSipMediaApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsRegion: string,
     *     Name: string,
     *     Endpoints: list<Shapes\SipMediaApplicationEndpoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
