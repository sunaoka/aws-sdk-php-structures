<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DryRunId
 * @property string $DryRunStatus
 * @property string $CreationDate
 * @property string $UpdateDate
 * @property list<ValidationFailure> $ValidationFailures
 */
class DryRunProgressStatus extends Shape
{
    /**
     * @param array{
     *     DryRunId: string,
     *     DryRunStatus: string,
     *     CreationDate: string,
     *     UpdateDate: string,
     *     ValidationFailures?: list<ValidationFailure>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
