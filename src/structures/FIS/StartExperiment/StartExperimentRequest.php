<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $experimentTemplateId
 * @property array<string, string>|null $tags
 */
class StartExperimentRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     experimentTemplateId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
