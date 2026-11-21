<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutProjectDataRetentionStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectIdentifier
 * @property 'anthropic'|'openai' $modelProvider
 * @property 'customer_managed'|'amazon_managed' $storageDestination
 * @property Shapes\DataRetentionStorageConfiguration|null $storageConfiguration
 */
class PutProjectDataRetentionStorageRequest extends Request
{
    /**
     * @param array{
     *     projectIdentifier: string,
     *     modelProvider: 'anthropic'|'openai',
     *     storageDestination: 'customer_managed'|'amazon_managed',
     *     storageConfiguration?: Shapes\DataRetentionStorageConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
