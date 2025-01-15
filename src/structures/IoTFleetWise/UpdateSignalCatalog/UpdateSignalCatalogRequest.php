<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateSignalCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\Node>|null $nodesToAdd
 * @property list<Shapes\Node>|null $nodesToUpdate
 * @property list<string>|null $nodesToRemove
 */
class UpdateSignalCatalogRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     nodesToAdd?: list<Shapes\Node>|null,
     *     nodesToUpdate?: list<Shapes\Node>|null,
     *     nodesToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
