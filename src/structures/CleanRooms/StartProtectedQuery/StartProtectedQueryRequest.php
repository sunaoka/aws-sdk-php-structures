<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SQL' $type
 * @property string $membershipIdentifier
 * @property Shapes\ProtectedQuerySQLParameters $sqlParameters
 * @property Shapes\ProtectedQueryResultConfiguration|null $resultConfiguration
 * @property Shapes\ComputeConfiguration|null $computeConfiguration
 */
class StartProtectedQueryRequest extends Request
{
    /**
     * @param array{
     *     type: 'SQL',
     *     membershipIdentifier: string,
     *     sqlParameters: Shapes\ProtectedQuerySQLParameters,
     *     resultConfiguration?: Shapes\ProtectedQueryResultConfiguration|null,
     *     computeConfiguration?: Shapes\ComputeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
