<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateModelManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<string> $nodes
 * @property string $signalCatalogArn
 * @property list<Shapes\Tag> $tags
 */
class CreateModelManifestRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     nodes: list<string>,
     *     signalCatalogArn: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
