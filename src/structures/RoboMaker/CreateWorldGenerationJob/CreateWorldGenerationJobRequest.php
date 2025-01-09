<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateWorldGenerationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientRequestToken
 * @property string $template
 * @property Shapes\WorldCount $worldCount
 * @property array<string, string> $tags
 * @property array<string, string> $worldTags
 */
class CreateWorldGenerationJobRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string,
     *     template: string,
     *     worldCount: Shapes\WorldCount,
     *     tags?: array<string, string>,
     *     worldTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
