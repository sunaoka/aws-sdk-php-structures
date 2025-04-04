<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelQualityJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 */
class DeleteModelQualityJobDefinitionRequest extends Request
{
    /**
     * @param array{JobDefinitionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
