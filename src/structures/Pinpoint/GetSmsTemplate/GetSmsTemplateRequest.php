<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSmsTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property string $Version
 */
class GetSmsTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateName: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
