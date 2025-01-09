<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateSignalCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\Node> $nodes
 * @property list<Shapes\Tag> $tags
 */
class CreateSignalCatalogRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     nodes?: list<Shapes\Node>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
