<?php

namespace Sunaoka\Aws\Structures\Transfer\StartRemoteMove;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string $SourcePath
 * @property string $TargetPath
 */
class StartRemoteMoveRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     SourcePath: string,
     *     TargetPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
