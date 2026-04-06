<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdatePlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property 'OPEN_API_V3' $apiSchemaType
 * @property APISchema|null $apiSchema
 */
class CustomPluginConfiguration extends Shape
{
    /**
     * @param array{
     *     description: string,
     *     apiSchemaType: 'OPEN_API_V3',
     *     apiSchema?: APISchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
