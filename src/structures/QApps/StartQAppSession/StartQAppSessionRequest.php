<?php

namespace Sunaoka\Aws\Structures\QApps\StartQAppSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $appId
 * @property int $appVersion
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
     *     appVersion: int,
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
