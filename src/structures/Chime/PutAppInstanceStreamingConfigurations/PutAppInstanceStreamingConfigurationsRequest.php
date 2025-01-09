<?php

namespace Sunaoka\Aws\Structures\Chime\PutAppInstanceStreamingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property list<Shapes\AppInstanceStreamingConfiguration> $AppInstanceStreamingConfigurations
 */
class PutAppInstanceStreamingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     AppInstanceStreamingConfigurations: list<Shapes\AppInstanceStreamingConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
