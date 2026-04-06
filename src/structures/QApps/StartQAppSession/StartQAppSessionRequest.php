<?php

namespace Sunaoka\Aws\Structures\QApps\StartQAppSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $appId
 * @property int<0, 2147483647> $appVersion
 * @property list<Shapes\CardValue>|null $initialValues
 * @property string|null $sessionId
 * @property array<string, string>|null $tags
 */
class StartQAppSessionRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     appId: string,
     *     appVersion: int<0, 2147483647>,
     *     initialValues?: list<Shapes\CardValue>|null,
     *     sessionId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
