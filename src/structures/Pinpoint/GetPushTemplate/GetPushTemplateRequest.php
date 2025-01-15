<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetPushTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property string|null $Version
 */
class GetPushTemplateRequest extends Request
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
