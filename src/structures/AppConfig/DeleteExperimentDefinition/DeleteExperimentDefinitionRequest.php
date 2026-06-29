<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteExperimentDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $ExperimentDefinitionIdentifier
 * @property 'ARCHIVE'|'DESTROY'|null $DeleteType
 */
class DeleteExperimentDefinitionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     ExperimentDefinitionIdentifier: string,
     *     DeleteType?: 'ARCHIVE'|'DESTROY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
