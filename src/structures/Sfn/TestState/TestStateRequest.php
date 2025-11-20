<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $definition
 * @property string|null $roleArn
 * @property string|null $input
 * @property 'INFO'|'DEBUG'|'TRACE'|null $inspectionLevel
 * @property bool|null $revealSecrets
 * @property string|null $variables
 * @property string|null $stateName
 * @property Shapes\MockInput|null $mock
 * @property string|null $context
 * @property Shapes\TestStateConfiguration|null $stateConfiguration
 */
class TestStateRequest extends Request
{
    /**
     * @param array{
     *     definition: string,
     *     roleArn?: string|null,
     *     input?: string|null,
     *     inspectionLevel?: 'INFO'|'DEBUG'|'TRACE'|null,
     *     revealSecrets?: bool|null,
     *     variables?: string|null,
     *     stateName?: string|null,
     *     mock?: Shapes\MockInput|null,
     *     context?: string|null,
     *     stateConfiguration?: Shapes\TestStateConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
