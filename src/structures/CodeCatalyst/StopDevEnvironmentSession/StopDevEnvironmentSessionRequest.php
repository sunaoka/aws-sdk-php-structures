<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StopDevEnvironmentSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 * @property string $sessionId
 */
class StopDevEnvironmentSessionRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     id: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
