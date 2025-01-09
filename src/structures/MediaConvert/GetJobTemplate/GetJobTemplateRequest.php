<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetJobTemplateRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
