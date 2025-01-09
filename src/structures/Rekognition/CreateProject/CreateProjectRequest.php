<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property 'CONTENT_MODERATION'|'CUSTOM_LABELS' $Feature
 * @property 'ENABLED'|'DISABLED' $AutoUpdate
 * @property array<string, string> $Tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     Feature?: 'CONTENT_MODERATION'|'CUSTOM_LABELS',
     *     AutoUpdate?: 'ENABLED'|'DISABLED',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
