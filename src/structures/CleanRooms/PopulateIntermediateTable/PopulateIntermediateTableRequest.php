<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PopulateIntermediateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $intermediateTableIdentifier
 * @property string $membershipIdentifier
 * @property array<string, string>|null $parameters
 * @property Shapes\IntermediateTableComputeConfiguration|null $computeConfiguration
 * @property string|null $analysisPayerAccountId
 */
class PopulateIntermediateTableRequest extends Request
{
    /**
     * @param array{
     *     intermediateTableIdentifier: string,
     *     membershipIdentifier: string,
     *     parameters?: array<string, string>|null,
     *     computeConfiguration?: Shapes\IntermediateTableComputeConfiguration|null,
     *     analysisPayerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
