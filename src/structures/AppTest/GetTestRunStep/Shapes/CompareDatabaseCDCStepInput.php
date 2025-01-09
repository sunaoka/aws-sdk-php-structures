<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceLocation
 * @property string $targetLocation
 * @property string $outputLocation
 * @property SourceDatabaseMetadata $sourceMetadata
 * @property TargetDatabaseMetadata $targetMetadata
 */
class CompareDatabaseCDCStepInput extends Shape
{
    /**
     * @param array{
     *     sourceLocation: string,
     *     targetLocation: string,
     *     outputLocation?: string,
     *     sourceMetadata: SourceDatabaseMetadata,
     *     targetMetadata: TargetDatabaseMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
