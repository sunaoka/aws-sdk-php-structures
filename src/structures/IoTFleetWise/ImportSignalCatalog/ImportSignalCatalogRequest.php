<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ImportSignalCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property Shapes\FormattedVss $vss
 * @property list<Shapes\Tag> $tags
 */
class ImportSignalCatalogRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     vss?: Shapes\FormattedVss,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
