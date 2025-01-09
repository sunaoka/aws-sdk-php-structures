<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateStateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $signalCatalogArn
 * @property list<string> $stateTemplateProperties
 * @property list<string> $dataExtraDimensions
 * @property list<string> $metadataExtraDimensions
 * @property list<Shapes\Tag> $tags
 */
class CreateStateTemplateRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     signalCatalogArn: string,
     *     stateTemplateProperties: list<string>,
     *     dataExtraDimensions?: list<string>,
     *     metadataExtraDimensions?: list<string>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
