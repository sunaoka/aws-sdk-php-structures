<?php

namespace Sunaoka\Aws\Structures\RoboMaker\GetWorldTemplateBody;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $template
 * @property string $generationJob
 */
class GetWorldTemplateBodyRequest extends Request
{
    /**
     * @param array{
     *     template?: string,
     *     generationJob?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
