<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $templateId
 */
class GetTemplateRequest extends Request
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
