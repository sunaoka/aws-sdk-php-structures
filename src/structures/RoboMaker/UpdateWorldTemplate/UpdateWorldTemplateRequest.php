<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateWorldTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $template
 * @property string|null $name
 * @property string|null $templateBody
 * @property Shapes\TemplateLocation|null $templateLocation
 */
class UpdateWorldTemplateRequest extends Request
{
    /**
     * @param array{
     *     template: string,
     *     name?: string|null,
     *     templateBody?: string|null,
     *     templateLocation?: Shapes\TemplateLocation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
