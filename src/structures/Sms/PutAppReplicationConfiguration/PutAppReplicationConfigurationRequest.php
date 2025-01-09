<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property list<Shapes\ServerGroupReplicationConfiguration> $serverGroupReplicationConfigurations
 */
class PutAppReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     appId?: string,
     *     serverGroupReplicationConfigurations?: list<Shapes\ServerGroupReplicationConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
