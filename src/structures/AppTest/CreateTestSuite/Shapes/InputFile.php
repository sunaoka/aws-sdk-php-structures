<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceLocation
 * @property string $targetLocation
 * @property FileMetadata $fileMetadata
 */
class InputFile extends Shape
{
    /**
     * @param array{
     *     sourceLocation: string,
     *     targetLocation: string,
     *     fileMetadata: FileMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
