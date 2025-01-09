<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateApplicationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $SemanticVersion
 * @property string $SourceCodeArchiveUrl
 * @property string $SourceCodeUrl
 * @property string $TemplateBody
 * @property string $TemplateUrl
 */
class CreateApplicationVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SemanticVersion: string,
     *     SourceCodeArchiveUrl?: string,
     *     SourceCodeUrl?: string,
     *     TemplateBody?: string,
     *     TemplateUrl?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
