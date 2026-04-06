<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketOwnerAccountId
 * @property string $uri
 */
class CustomS3Location extends Shape
{
    /**
     * @param array{
     *     bucketOwnerAccountId?: string|null,
     *     uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
