<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitivityInspectionTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetSensitivityInspectionTemplateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
