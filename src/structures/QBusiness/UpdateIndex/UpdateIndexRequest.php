<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $displayName
 * @property string $description
 * @property Shapes\IndexCapacityConfiguration $capacityConfiguration
 * @property list<Shapes\DocumentAttributeConfiguration> $documentAttributeConfigurations
 */
class UpdateIndexRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     displayName?: string,
     *     description?: string,
     *     capacityConfiguration?: Shapes\IndexCapacityConfiguration,
     *     documentAttributeConfigurations?: list<Shapes\DocumentAttributeConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
