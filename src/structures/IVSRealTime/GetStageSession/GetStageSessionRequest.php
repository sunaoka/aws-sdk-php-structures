<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStageSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionId
 * @property string $stageArn
 */
class GetStageSessionRequest extends Request
{
    /**
     * @param array{
     *     sessionId: string,
     *     stageArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
