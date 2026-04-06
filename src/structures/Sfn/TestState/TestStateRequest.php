<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $definition
 * @property string $roleArn
 * @property string|null $input
 * @property 'INFO'|'DEBUG'|'TRACE'|null $inspectionLevel
 * @property bool|null $revealSecrets
 */
class TestStateRequest extends Request
{
    /**
     * @param array{
     *     definition: string,
     *     roleArn: string,
     *     input?: string|null,
     *     inspectionLevel?: 'INFO'|'DEBUG'|'TRACE'|null,
     *     revealSecrets?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
