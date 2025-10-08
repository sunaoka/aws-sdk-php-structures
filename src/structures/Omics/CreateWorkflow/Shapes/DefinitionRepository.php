<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectionArn
 * @property string $fullRepositoryId
 * @property SourceReference|null $sourceReference
 * @property list<string>|null $excludeFilePatterns
 */
class DefinitionRepository extends Shape
{
    /**
     * @param array{
     *     connectionArn: string,
     *     fullRepositoryId: string,
     *     sourceReference?: SourceReference|null,
     *     excludeFilePatterns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
