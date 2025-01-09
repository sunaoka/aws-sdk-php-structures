<?php

namespace Sunaoka\Aws\Structures\Efs\CreateReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceFileSystemId
 * @property list<Shapes\DestinationToCreate> $Destinations
 */
class CreateReplicationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     SourceFileSystemId: string,
     *     Destinations: list<Shapes\DestinationToCreate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
