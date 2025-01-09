<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateSignalCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\Node> $nodesToAdd
 * @property list<Shapes\Node> $nodesToUpdate
 * @property list<string> $nodesToRemove
 */
class UpdateSignalCatalogRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     nodesToAdd?: list<Shapes\Node>,
     *     nodesToUpdate?: list<Shapes\Node>,
     *     nodesToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
