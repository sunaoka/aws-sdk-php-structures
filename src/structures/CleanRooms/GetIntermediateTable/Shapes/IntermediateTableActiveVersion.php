<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $versionId
 * @property string $analysisId
 * @property 'QUERY' $analysisType
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $parameters
 * @property IntermediateTableInheritedConstraints $inheritedConstraints
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 */
class IntermediateTableActiveVersion extends Shape
{
    /**
     * @param array{
     *     versionId: string,
     *     analysisId: string,
     *     analysisType: 'QUERY',
     *     kmsKeyArn?: string|null,
     *     parameters?: array<string, string>|null,
     *     inheritedConstraints: IntermediateTableInheritedConstraints,
     *     expirationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
