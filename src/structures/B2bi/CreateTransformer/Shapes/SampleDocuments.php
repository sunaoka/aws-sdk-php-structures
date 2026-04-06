<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property list<SampleDocumentKeys> $keys
 */
class SampleDocuments extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     keys: list<SampleDocumentKeys>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
