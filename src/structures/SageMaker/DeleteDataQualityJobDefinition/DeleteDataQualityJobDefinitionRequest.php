<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteDataQualityJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 */
class DeleteDataQualityJobDefinitionRequest extends Request
{
    /**
     * @param array{JobDefinitionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
