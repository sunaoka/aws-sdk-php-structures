<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AuthProvider> $authProviders
 * @property list<AuthMode> $connectionAuthModes
 * @property list<AuthMode> $defaultPublishAuthModes
 * @property list<AuthMode> $defaultSubscribeAuthModes
 * @property EventLogConfig $logConfig
 */
class EventConfig extends Shape
{
    /**
     * @param array{
     *     authProviders: list<AuthProvider>,
     *     connectionAuthModes: list<AuthMode>,
     *     defaultPublishAuthModes: list<AuthMode>,
     *     defaultSubscribeAuthModes: list<AuthMode>,
     *     logConfig?: EventLogConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
