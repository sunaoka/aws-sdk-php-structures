<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStageSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property string $sessionId
 */
class GetStageSessionRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
