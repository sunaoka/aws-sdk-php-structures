<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleetId
 * @property string $description
 * @property string $signalCatalogArn
 * @property list<Shapes\Tag> $tags
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     fleetId: string,
     *     description?: string,
     *     signalCatalogArn: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
