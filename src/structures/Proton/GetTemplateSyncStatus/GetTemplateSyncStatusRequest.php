<?php

namespace Sunaoka\Aws\Structures\Proton\GetTemplateSyncStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 * @property 'ENVIRONMENT'|'SERVICE' $templateType
 * @property string $templateVersion
 */
class GetTemplateSyncStatusRequest extends Request
{
    /**
     * @param array{
     *     templateName: string,
     *     templateType: 'ENVIRONMENT'|'SERVICE',
     *     templateVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
