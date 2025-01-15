<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateSignalCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\Node>|null $nodes
 * @property list<Shapes\Tag>|null $tags
 */
class CreateSignalCatalogRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     nodes?: list<Shapes\Node>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
