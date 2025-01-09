<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateWorldTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $template
 * @property string $name
 * @property string $templateBody
 * @property Shapes\TemplateLocation $templateLocation
 */
class UpdateWorldTemplateRequest extends Request
{
    /**
     * @param array{
     *     template: string,
     *     name?: string,
     *     templateBody?: string,
     *     templateLocation?: Shapes\TemplateLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
