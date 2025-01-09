<?php

namespace Sunaoka\Aws\Structures\FIS\DeleteExperimentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteExperimentTemplateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
