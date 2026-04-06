<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelHandshake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $programManagementAccountIdentifier
 * @property string|null $note
 */
class RevokeServicePeriodPayload extends Shape
{
    /**
     * @param array{
     *     programManagementAccountIdentifier: string,
     *     note?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
