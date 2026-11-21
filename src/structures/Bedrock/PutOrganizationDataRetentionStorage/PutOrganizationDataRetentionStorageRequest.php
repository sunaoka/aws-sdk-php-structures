<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutOrganizationDataRetentionStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'anthropic'|'openai' $modelProvider
 * @property 'customer_managed'|'amazon_managed' $storageDestination
 * @property Shapes\DataRetentionStorageConfiguration|null $storageConfiguration
 */
class PutOrganizationDataRetentionStorageRequest extends Request
{
    /**
     * @param array{
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
