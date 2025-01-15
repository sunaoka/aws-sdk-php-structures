<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $clientToken
 * @property Shapes\JobTemplateData $jobTemplateData
 * @property array<string, string>|null $tags
 * @property string|null $kmsKeyArn
 */
class CreateJobTemplateRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     clientToken: string,
     *     jobTemplateData: Shapes\JobTemplateData,
     *     tags?: array<string, string>|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
