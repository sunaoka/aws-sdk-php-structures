<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StartDevEnvironmentSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 * @property Shapes\DevEnvironmentSessionConfiguration $sessionConfiguration
 */
class StartDevEnvironmentSessionRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     id: string,
     *     sessionConfiguration: Shapes\DevEnvironmentSessionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
