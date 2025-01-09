<?php

namespace Sunaoka\Aws\Structures\Proton\GetEnvironmentTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $majorVersion
 * @property string $minorVersion
 * @property string $templateName
 */
class GetEnvironmentTemplateVersionRequest extends Request
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
