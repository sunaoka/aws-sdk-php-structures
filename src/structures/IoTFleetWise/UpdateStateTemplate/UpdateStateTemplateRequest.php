<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateStateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string $description
 * @property list<string> $stateTemplatePropertiesToAdd
 * @property list<string> $stateTemplatePropertiesToRemove
 * @property list<string> $dataExtraDimensions
 * @property list<string> $metadataExtraDimensions
 */
class UpdateStateTemplateRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     description?: string,
     *     stateTemplatePropertiesToAdd?: list<string>,
     *     stateTemplatePropertiesToRemove?: list<string>,
     *     dataExtraDimensions?: list<string>,
     *     metadataExtraDimensions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
