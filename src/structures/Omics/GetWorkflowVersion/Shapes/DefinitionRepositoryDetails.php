<?php

namespace Sunaoka\Aws\Structures\Omics\GetWorkflowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $connectionArn
 * @property string|null $fullRepositoryId
 * @property SourceReference|null $sourceReference
 * @property string|null $providerType
 * @property string|null $providerEndpoint
 */
class DefinitionRepositoryDetails extends Shape
{
    /**
     * @param array{
     *     connectionArn?: string|null,
     *     fullRepositoryId?: string|null,
     *     sourceReference?: SourceReference|null,
     *     providerType?: string|null,
     *     providerEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
