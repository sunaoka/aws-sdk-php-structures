<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegisteredGatewayArn
 * @property string $ResourceArn
 * @property string $ResourceType
 * @property string $Definition
 * @property string $NameTag
 * @property bool $IsMiddlebox
 */
class NetworkResourceSummary extends Shape
{
    /**
     * @param array{
     *     RegisteredGatewayArn?: string,
     *     ResourceArn?: string,
     *     ResourceType?: string,
     *     Definition?: string,
     *     NameTag?: string,
     *     IsMiddlebox?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
