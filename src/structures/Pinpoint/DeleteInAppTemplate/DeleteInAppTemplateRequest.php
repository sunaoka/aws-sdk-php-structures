<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteInAppTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property string|null $Version
 */
class DeleteInAppTemplateRequest extends Request
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
