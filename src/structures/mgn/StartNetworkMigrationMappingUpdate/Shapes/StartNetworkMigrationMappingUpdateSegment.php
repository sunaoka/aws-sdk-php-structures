<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $segmentID
 * @property string|null $targetAccount
 * @property array<string, string>|null $scopeTags
 */
class StartNetworkMigrationMappingUpdateSegment extends Shape
{
    /**
     * @param array{
     *     segmentID: string,
     *     targetAccount?: string|null,
     *     scopeTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
