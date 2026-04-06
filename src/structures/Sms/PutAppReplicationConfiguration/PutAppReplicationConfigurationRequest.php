<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appId
 * @property list<Shapes\ServerGroupReplicationConfiguration>|null $serverGroupReplicationConfigurations
 */
class PutAppReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     appId?: string|null,
     *     serverGroupReplicationConfigurations?: list<Shapes\ServerGroupReplicationConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
