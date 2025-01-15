<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateStateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $description
 * @property list<string>|null $stateTemplatePropertiesToAdd
 * @property list<string>|null $stateTemplatePropertiesToRemove
 * @property list<string>|null $dataExtraDimensions
 * @property list<string>|null $metadataExtraDimensions
 */
class UpdateStateTemplateRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     description?: string|null,
     *     stateTemplatePropertiesToAdd?: list<string>|null,
     *     stateTemplatePropertiesToRemove?: list<string>|null,
     *     dataExtraDimensions?: list<string>|null,
     *     metadataExtraDimensions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
