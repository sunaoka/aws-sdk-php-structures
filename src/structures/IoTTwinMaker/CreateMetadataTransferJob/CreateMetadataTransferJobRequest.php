<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metadataTransferJobId
 * @property string $description
 * @property list<Shapes\SourceConfiguration> $sources
 * @property Shapes\DestinationConfiguration $destination
 */
class CreateMetadataTransferJobRequest extends Request
{
    /**
     * @param array{
     *     metadataTransferJobId?: string,
     *     description?: string,
     *     sources: list<Shapes\SourceConfiguration>,
     *     destination: Shapes\DestinationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
