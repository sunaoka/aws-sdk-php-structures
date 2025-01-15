<?php

namespace Sunaoka\Aws\Structures\Sms\GenerateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appId
 * @property 'JSON'|'YAML'|null $templateFormat
 */
class GenerateTemplateRequest extends Request
{
    /**
     * @param array{
     *     appId?: string|null,
     *     templateFormat?: 'JSON'|'YAML'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
