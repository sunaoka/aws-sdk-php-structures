<?php

namespace Sunaoka\Aws\Structures\Athena\StartSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $WorkGroup
 * @property Shapes\EngineConfiguration $EngineConfiguration
 * @property string $NotebookVersion
 * @property int<1, 480> $SessionIdleTimeoutInMinutes
 * @property string $ClientRequestToken
 */
class StartSessionRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     WorkGroup: string,
     *     EngineConfiguration: Shapes\EngineConfiguration,
     *     NotebookVersion?: string,
     *     SessionIdleTimeoutInMinutes?: int<1, 480>,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
