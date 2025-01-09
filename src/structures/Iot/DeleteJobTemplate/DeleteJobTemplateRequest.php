<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobTemplateId
 */
class DeleteJobTemplateRequest extends Request
{
    /**
     * @param array{jobTemplateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
