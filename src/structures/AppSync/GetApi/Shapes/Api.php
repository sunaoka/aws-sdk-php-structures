<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiId
 * @property string $name
 * @property string $ownerContact
 * @property array<string, string> $tags
 * @property array<string, string> $dns
 * @property string $apiArn
 * @property \Aws\Api\DateTimeResult $created
 * @property bool $xrayEnabled
 * @property string $wafWebAclArn
 * @property EventConfig $eventConfig
 */
class Api extends Shape
{
    /**
     * @param array{
     *     apiId?: string,
     *     name?: string,
     *     ownerContact?: string,
     *     tags?: array<string, string>,
     *     dns?: array<string, string>,
     *     apiArn?: string,
     *     created?: \Aws\Api\DateTimeResult,
     *     xrayEnabled?: bool,
     *     wafWebAclArn?: string,
     *     eventConfig?: EventConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
