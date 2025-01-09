<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceDatabaseMetadata $sourceMetadata
 * @property TargetDatabaseMetadata $targetMetadata
 */
class DatabaseCDC extends Shape
{
    /**
     * @param array{
     *     sourceMetadata: SourceDatabaseMetadata,
     *     targetMetadata: TargetDatabaseMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
