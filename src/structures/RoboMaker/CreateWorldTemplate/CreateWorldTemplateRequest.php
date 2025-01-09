<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateWorldTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientRequestToken
 * @property string $name
 * @property string $templateBody
 * @property Shapes\TemplateLocation $templateLocation
 * @property array<string, string> $tags
 */
class CreateWorldTemplateRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string,
     *     name?: string,
     *     templateBody?: string,
     *     templateLocation?: Shapes\TemplateLocation,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
