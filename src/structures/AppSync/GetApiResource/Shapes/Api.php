<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApiResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $apiId
 * @property string|null $name
 * @property string|null $ownerContact
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $dns
 * @property string|null $apiArn
 * @property \Aws\Api\DateTimeResult|null $created
 * @property bool|null $xrayEnabled
 * @property string|null $wafWebAclArn
 * @property EventConfig|null $eventConfig
 */
class Api extends Shape
{
    /**
     * @param array{
     *     apiId?: string|null,
     *     name?: string|null,
     *     ownerContact?: string|null,
     *     tags?: array<string, string>|null,
     *     dns?: array<string, string>|null,
     *     apiArn?: string|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     xrayEnabled?: bool|null,
     *     wafWebAclArn?: string|null,
     *     eventConfig?: EventConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
