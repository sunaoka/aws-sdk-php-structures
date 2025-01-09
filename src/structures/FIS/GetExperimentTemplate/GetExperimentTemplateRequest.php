<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetExperimentTemplateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
