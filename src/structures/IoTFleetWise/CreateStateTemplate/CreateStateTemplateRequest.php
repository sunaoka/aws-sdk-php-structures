<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateStateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $signalCatalogArn
 * @property list<string> $stateTemplateProperties
 * @property list<string>|null $dataExtraDimensions
 * @property list<string>|null $metadataExtraDimensions
 * @property list<Shapes\Tag>|null $tags
 */
class CreateStateTemplateRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     signalCatalogArn: string,
     *     stateTemplateProperties: list<string>,
     *     dataExtraDimensions?: list<string>|null,
     *     metadataExtraDimensions?: list<string>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
