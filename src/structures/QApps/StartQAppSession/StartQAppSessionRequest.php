<?php

namespace Sunaoka\Aws\Structures\QApps\StartQAppSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $appId
 * @property int<0, 2147483647> $appVersion
 * @property list<Shapes\CardValue> $initialValues
 * @property string $sessionId
 * @property array<string, string> $tags
 */
class StartQAppSessionRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     appId: string,
     *     appVersion: int<0, 2147483647>,
     *     initialValues?: list<Shapes\CardValue>,
     *     sessionId?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
