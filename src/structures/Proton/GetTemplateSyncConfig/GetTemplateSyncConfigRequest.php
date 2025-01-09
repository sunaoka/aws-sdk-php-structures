<?php

namespace Sunaoka\Aws\Structures\Proton\GetTemplateSyncConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property 'ENVIRONMENT'|'SERVICE' $templateType
 */
class GetTemplateSyncConfigRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     templateType: 'ENVIRONMENT'|'SERVICE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
