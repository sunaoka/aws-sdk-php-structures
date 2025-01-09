<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQAppSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $sessionId
 * @property list<Shapes\CardValue> $values
 */
class UpdateQAppSessionRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     sessionId: string,
     *     values?: list<Shapes\CardValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
