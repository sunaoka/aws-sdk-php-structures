<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property array<string, SsmExternalParameter>|null $externalParameters
 * @property bool|null $mustSucceedForCutover
 * @property array<string, list<SsmParameterStoreParameter>>|null $parameters
 * @property string $ssmDocumentName
 * @property int<1, max>|null $timeoutSeconds
 */
class SsmDocument extends Shape
{
    /**
     * @param array{
     *     actionName: string,
     *     externalParameters?: array<string, SsmExternalParameter>|null,
     *     mustSucceedForCutover?: bool|null,
     *     parameters?: array<string, list<SsmParameterStoreParameter>>|null,
     *     ssmDocumentName: string,
     *     timeoutSeconds?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
