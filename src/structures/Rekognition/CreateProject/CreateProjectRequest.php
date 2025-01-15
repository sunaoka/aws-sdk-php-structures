<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property 'CONTENT_MODERATION'|'CUSTOM_LABELS'|null $Feature
 * @property 'ENABLED'|'DISABLED'|null $AutoUpdate
 * @property array<string, string>|null $Tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     Feature?: 'CONTENT_MODERATION'|'CUSTOM_LABELS'|null,
     *     AutoUpdate?: 'ENABLED'|'DISABLED'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
