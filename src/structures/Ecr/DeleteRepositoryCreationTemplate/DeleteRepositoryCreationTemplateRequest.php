<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteRepositoryCreationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $prefix
 */
class DeleteRepositoryCreationTemplateRequest extends Request
{
    /**
     * @param array{prefix: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
