<?php

namespace Sunaoka\Aws\Structures\Connect\CreateAuthCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\AuthScope $Scope
 * @property int<1440, 43200>|null $MaxSessionDurationMinutes
 * @property int<0, 20160> $SessionInactivityDurationMinutes
 */
class CreateAuthCodeRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Scope: Shapes\AuthScope,
     *     MaxSessionDurationMinutes?: int<1440, 43200>|null,
     *     SessionInactivityDurationMinutes: int<0, 20160>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
