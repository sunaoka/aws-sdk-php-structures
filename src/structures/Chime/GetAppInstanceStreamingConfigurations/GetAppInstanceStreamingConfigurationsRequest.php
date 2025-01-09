<?php

namespace Sunaoka\Aws\Structures\Chime\GetAppInstanceStreamingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 */
class GetAppInstanceStreamingConfigurationsRequest extends Request
{
    /**
     * @param array{AppInstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
