<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\AssociateEntityToThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $entityId
 * @property int|null $namespaceVersion
 */
class AssociateEntityToThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     entityId: string,
     *     namespaceVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
