<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetExperimentRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
