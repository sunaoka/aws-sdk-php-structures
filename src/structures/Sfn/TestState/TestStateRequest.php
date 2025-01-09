<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $definition
 * @property string $roleArn
 * @property string $input
 * @property 'INFO'|'DEBUG'|'TRACE' $inspectionLevel
 * @property bool $revealSecrets
 * @property string $variables
 */
class TestStateRequest extends Request
{
    /**
     * @param array{
     *     definition: string,
     *     roleArn?: string,
     *     input?: string,
     *     inspectionLevel?: 'INFO'|'DEBUG'|'TRACE',
     *     revealSecrets?: bool,
     *     variables?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
