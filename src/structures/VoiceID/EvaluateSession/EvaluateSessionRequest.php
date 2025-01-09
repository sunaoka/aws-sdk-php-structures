<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $SessionNameOrId
 */
class EvaluateSessionRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     SessionNameOrId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
