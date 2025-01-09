<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\PutDraftAppVersionTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appTemplateBody
 */
class PutDraftAppVersionTemplateRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appTemplateBody: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
