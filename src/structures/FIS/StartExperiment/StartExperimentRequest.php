<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $experimentTemplateId
 * @property Shapes\StartExperimentExperimentOptionsInput $experimentOptions
 * @property array<string, string> $tags
 */
class StartExperimentRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     experimentTemplateId: string,
     *     experimentOptions?: Shapes\StartExperimentExperimentOptionsInput,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
