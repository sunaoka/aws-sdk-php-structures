<?php

namespace Sunaoka\Aws\Structures\mgn\StartCutover\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property array<string, SsmExternalParameter> $externalParameters
 * @property bool $mustSucceedForCutover
 * @property array<string, list<SsmParameterStoreParameter>> $parameters
 * @property string $ssmDocumentName
 * @property int $timeoutSeconds
 */
class SsmDocument extends Shape
{
    /**
     * @param array{
     *     actionName: string,
     *     externalParameters?: array<string, SsmExternalParameter>,
     *     mustSucceedForCutover?: bool,
     *     parameters?: array<string, list<SsmParameterStoreParameter>>,
     *     ssmDocumentName: string,
     *     timeoutSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
