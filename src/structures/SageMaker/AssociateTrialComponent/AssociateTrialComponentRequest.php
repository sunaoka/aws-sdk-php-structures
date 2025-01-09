<?php

namespace Sunaoka\Aws\Structures\SageMaker\AssociateTrialComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialComponentName
 * @property string $TrialName
 */
class AssociateTrialComponentRequest extends Request
{
    /**
     * @param array{
     *     TrialComponentName: string,
     *     TrialName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
