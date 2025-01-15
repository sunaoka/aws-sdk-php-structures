<?php

namespace Sunaoka\Aws\Structures\Sns\ListEndpointsByPlatformApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlatformApplicationArn
 * @property string|null $NextToken
 */
class ListEndpointsByPlatformApplicationRequest extends Request
{
    /**
     * @param array{
     *     PlatformApplicationArn: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
