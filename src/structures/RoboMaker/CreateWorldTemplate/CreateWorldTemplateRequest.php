<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateWorldTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientRequestToken
 * @property string|null $name
 * @property string|null $templateBody
 * @property Shapes\TemplateLocation|null $templateLocation
 * @property array<string, string>|null $tags
 */
class CreateWorldTemplateRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string|null,
     *     name?: string|null,
     *     templateBody?: string|null,
     *     templateLocation?: Shapes\TemplateLocation|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
