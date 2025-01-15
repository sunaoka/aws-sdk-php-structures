<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateModelManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<string> $nodes
 * @property string $signalCatalogArn
 * @property list<Shapes\Tag>|null $tags
 */
class CreateModelManifestRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     nodes: list<string>,
     *     signalCatalogArn: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
