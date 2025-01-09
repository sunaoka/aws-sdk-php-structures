<?php

namespace Sunaoka\Aws\Structures\Sms\GenerateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property 'JSON'|'YAML' $templateFormat
 */
class GenerateTemplateRequest extends Request
{
    /**
     * @param array{
     *     appId?: string,
     *     templateFormat?: 'JSON'|'YAML'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
