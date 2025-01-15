<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegisteredGatewayArn
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 * @property string|null $Definition
 * @property string|null $NameTag
 * @property bool|null $IsMiddlebox
 */
class NetworkResourceSummary extends Shape
{
    /**
     * @param array{
     *     RegisteredGatewayArn?: string|null,
     *     ResourceArn?: string|null,
     *     ResourceType?: string|null,
     *     Definition?: string|null,
     *     NameTag?: string|null,
     *     IsMiddlebox?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
