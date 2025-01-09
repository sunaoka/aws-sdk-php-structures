<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PYTHON_3'|'NODEJS_12'|'NODEJS_14'|'CORRETTO_8'|'CORRETTO_11'|'NODEJS_16'|'GO_1'|'DOTNET_6'|'PHP_81'|'RUBY_31'|'PYTHON_311'|'NODEJS_18' $Runtime
 * @property string $BuildCommand
 * @property string $StartCommand
 * @property string $Port
 * @property array<string, string> $RuntimeEnvironmentVariables
 * @property array<string, string> $RuntimeEnvironmentSecrets
 */
class CodeConfigurationValues extends Shape
{
    /**
     * @param array{
     *     Runtime: 'PYTHON_3'|'NODEJS_12'|'NODEJS_14'|'CORRETTO_8'|'CORRETTO_11'|'NODEJS_16'|'GO_1'|'DOTNET_6'|'PHP_81'|'RUBY_31'|'PYTHON_311'|'NODEJS_18',
     *     BuildCommand?: string,
     *     StartCommand?: string,
     *     Port?: string,
     *     RuntimeEnvironmentVariables?: array<string, string>,
     *     RuntimeEnvironmentSecrets?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
