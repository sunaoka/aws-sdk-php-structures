<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateIngestionDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $ingestionIdentifier
 * @property Shapes\ProcessingConfiguration $processingConfiguration
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateIngestionDestinationRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     ingestionIdentifier: string,
     *     processingConfiguration: Shapes\ProcessingConfiguration,
     *     destinationConfiguration: Shapes\DestinationConfiguration,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
