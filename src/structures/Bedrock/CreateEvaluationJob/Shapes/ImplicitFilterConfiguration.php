<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetadataAttributeSchema> $metadataAttributes
 * @property string $modelArn
 */
class ImplicitFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     metadataAttributes: list<MetadataAttributeSchema>,
     *     modelArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
