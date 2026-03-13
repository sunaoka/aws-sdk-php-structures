<?php

namespace Sunaoka\Aws\Structures\mgn\GetNetworkMigrationMapperSegmentConstruct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationDefinitionID
 * @property string $networkMigrationExecutionID
 * @property string $segmentID
 * @property string $constructID
 */
class GetNetworkMigrationMapperSegmentConstructRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationDefinitionID: string,
     *     networkMigrationExecutionID: string,
     *     segmentID: string,
     *     constructID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
