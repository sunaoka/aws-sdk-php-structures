<?php

namespace Sunaoka\Aws\Structures\RoboMaker\GetWorldTemplateBody;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $template
 * @property string|null $generationJob
 */
class GetWorldTemplateBodyRequest extends Request
{
    /**
     * @param array{
     *     template?: string|null,
     *     generationJob?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
