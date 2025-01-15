<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleetId
 * @property string|null $description
 * @property string $signalCatalogArn
 * @property list<Shapes\Tag>|null $tags
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     fleetId: string,
     *     description?: string|null,
     *     signalCatalogArn: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
