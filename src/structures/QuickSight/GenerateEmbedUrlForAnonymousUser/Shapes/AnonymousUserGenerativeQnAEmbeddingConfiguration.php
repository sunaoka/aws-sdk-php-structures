<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForAnonymousUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InitialTopicId
 */
class AnonymousUserGenerativeQnAEmbeddingConfiguration extends Shape
{
    /**
     * @param array{InitialTopicId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
