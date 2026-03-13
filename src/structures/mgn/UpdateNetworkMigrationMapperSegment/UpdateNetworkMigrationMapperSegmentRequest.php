<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationMapperSegment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationDefinitionID
 * @property string $networkMigrationExecutionID
 * @property string $segmentID
 * @property array<string, string>|null $scopeTags
 */
class UpdateNetworkMigrationMapperSegmentRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationDefinitionID: string,
     *     networkMigrationExecutionID: string,
     *     segmentID: string,
     *     scopeTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
