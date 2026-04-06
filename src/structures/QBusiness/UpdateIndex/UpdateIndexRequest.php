<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string|null $displayName
 * @property string|null $description
 * @property Shapes\IndexCapacityConfiguration|null $capacityConfiguration
 * @property list<Shapes\DocumentAttributeConfiguration>|null $documentAttributeConfigurations
 */
class UpdateIndexRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     capacityConfiguration?: Shapes\IndexCapacityConfiguration|null,
     *     documentAttributeConfigurations?: list<Shapes\DocumentAttributeConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
