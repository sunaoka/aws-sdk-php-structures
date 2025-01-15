<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteSmsTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property string|null $Version
 */
class DeleteSmsTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateName: string,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
