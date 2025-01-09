<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $majorVersion
 * @property string $minorVersion
 * @property string $templateName
 */
class GetServiceTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     majorVersion: string,
     *     minorVersion: string,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
