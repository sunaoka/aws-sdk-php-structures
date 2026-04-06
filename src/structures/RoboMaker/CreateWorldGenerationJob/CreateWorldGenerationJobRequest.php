<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateWorldGenerationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientRequestToken
 * @property string $template
 * @property Shapes\WorldCount $worldCount
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $worldTags
 */
class CreateWorldGenerationJobRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string|null,
     *     template: string,
     *     worldCount: Shapes\WorldCount,
     *     tags?: array<string, string>|null,
     *     worldTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
