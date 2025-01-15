<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateApplicationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $SemanticVersion
 * @property string|null $SourceCodeArchiveUrl
 * @property string|null $SourceCodeUrl
 * @property string|null $TemplateBody
 * @property string|null $TemplateUrl
 */
class CreateApplicationVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SemanticVersion: string,
     *     SourceCodeArchiveUrl?: string|null,
     *     SourceCodeUrl?: string|null,
     *     TemplateBody?: string|null,
     *     TemplateUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
