<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SQL' $type
 * @property string $membershipIdentifier
 * @property Shapes\ProtectedQuerySQLParameters $sqlParameters
 * @property Shapes\ProtectedQueryResultConfiguration $resultConfiguration
 * @property Shapes\ComputeConfiguration $computeConfiguration
 */
class StartProtectedQueryRequest extends Request
{
    /**
     * @param array{
     *     type: 'SQL',
     *     membershipIdentifier: string,
     *     sqlParameters: Shapes\ProtectedQuerySQLParameters,
     *     resultConfiguration?: Shapes\ProtectedQueryResultConfiguration,
     *     computeConfiguration?: Shapes\ComputeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
