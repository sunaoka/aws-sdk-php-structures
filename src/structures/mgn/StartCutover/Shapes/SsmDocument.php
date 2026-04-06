<?php

namespace Sunaoka\Aws\Structures\mgn\StartCutover\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property string $ssmDocumentName
 * @property int<1, max>|null $timeoutSeconds
 * @property bool|null $mustSucceedForCutover
 * @property array<string, list<SsmParameterStoreParameter>>|null $parameters
 * @property array<string, SsmExternalParameter>|null $externalParameters
 */
class SsmDocument extends Shape
{
    /**
     * @param array{
     *     actionName: string,
     *     ssmDocumentName: string,
     *     timeoutSeconds?: int<1, max>|null,
     *     mustSucceedForCutover?: bool|null,
     *     parameters?: array<string, list<SsmParameterStoreParameter>>|null,
     *     externalParameters?: array<string, SsmExternalParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
