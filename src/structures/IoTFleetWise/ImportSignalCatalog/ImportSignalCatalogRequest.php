<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ImportSignalCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\FormattedVss|null $vss
 * @property list<Shapes\Tag>|null $tags
 */
class ImportSignalCatalogRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     vss?: Shapes\FormattedVss|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
