<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileObjectTypeTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateId
 */
class GetProfileObjectTypeTemplateRequest extends Request
{
    /**
     * @param array{TemplateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
