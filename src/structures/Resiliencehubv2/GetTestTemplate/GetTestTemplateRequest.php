<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTestTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testTemplateArn
 */
class GetTestTemplateRequest extends Request
{
    /**
     * @param array{testTemplateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
