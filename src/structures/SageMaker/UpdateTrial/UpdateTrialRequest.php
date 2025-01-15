<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialName
 * @property string|null $DisplayName
 */
class UpdateTrialRequest extends Request
{
    /**
     * @param array{
     *     TrialName: string,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
