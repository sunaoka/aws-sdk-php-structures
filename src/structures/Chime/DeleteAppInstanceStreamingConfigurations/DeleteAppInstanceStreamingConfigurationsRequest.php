<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteAppInstanceStreamingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 */
class DeleteAppInstanceStreamingConfigurationsRequest extends Request
{
    /**
     * @param array{AppInstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
