<?php

namespace Sunaoka\Aws\Structures\Athena\StartSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $WorkGroup
 * @property Shapes\EngineConfiguration $EngineConfiguration
 * @property string|null $NotebookVersion
 * @property int<1, 480>|null $SessionIdleTimeoutInMinutes
 * @property string|null $ClientRequestToken
 */
class StartSessionRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     WorkGroup: string,
     *     EngineConfiguration: Shapes\EngineConfiguration,
     *     NotebookVersion?: string|null,
     *     SessionIdleTimeoutInMinutes?: int<1, 480>|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
