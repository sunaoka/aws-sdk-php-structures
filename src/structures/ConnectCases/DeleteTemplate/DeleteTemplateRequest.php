<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $templateId
 */
class DeleteTemplateRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     templateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
