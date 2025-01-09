<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreatePlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property 'OPEN_API_V3' $apiSchemaType
 * @property APISchema $apiSchema
 */
class CustomPluginConfiguration extends Shape
{
    /**
     * @param array{
     *     description: string,
     *     apiSchemaType: 'OPEN_API_V3',
     *     apiSchema: APISchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
