<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InitialTopicId
 */
class RegisteredUserGenerativeQnAEmbeddingConfiguration extends Shape
{
    /**
     * @param array{InitialTopicId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
