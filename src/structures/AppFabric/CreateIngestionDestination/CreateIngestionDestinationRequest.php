<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateIngestionDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $ingestionIdentifier
 * @property Shapes\ProcessingConfiguration $processingConfiguration
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 * @property string $clientToken
 * @property list<Shapes\Tag> $tags
 */
class CreateIngestionDestinationRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     ingestionIdentifier: string,
     *     processingConfiguration: Shapes\ProcessingConfiguration,
     *     destinationConfiguration: Shapes\DestinationConfiguration,
     *     clientToken?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
