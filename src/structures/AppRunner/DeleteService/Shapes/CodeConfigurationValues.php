<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PYTHON_3'|'NODEJS_12'|'NODEJS_14'|'CORRETTO_8'|'CORRETTO_11'|'NODEJS_16'|'GO_1'|'DOTNET_6'|'PHP_81'|'RUBY_31'|'PYTHON_311'|'NODEJS_18'|'NODEJS_22' $Runtime
 * @property string|null $BuildCommand
 * @property string|null $StartCommand
 * @property string|null $Port
 * @property array<string, string>|null $RuntimeEnvironmentVariables
 * @property array<string, string>|null $RuntimeEnvironmentSecrets
 */
class CodeConfigurationValues extends Shape
{
    /**
     * @param array{
     *     Runtime: 'PYTHON_3'|'NODEJS_12'|'NODEJS_14'|'CORRETTO_8'|'CORRETTO_11'|'NODEJS_16'|'GO_1'|'DOTNET_6'|'PHP_81'|'RUBY_31'|'PYTHON_311'|'NODEJS_18'|'NODEJS_22',
     *     BuildCommand?: string|null,
     *     StartCommand?: string|null,
     *     Port?: string|null,
     *     RuntimeEnvironmentVariables?: array<string, string>|null,
     *     RuntimeEnvironmentSecrets?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
