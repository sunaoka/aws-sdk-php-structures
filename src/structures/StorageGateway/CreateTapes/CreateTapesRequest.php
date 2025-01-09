<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateTapes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int $TapeSizeInBytes
 * @property string $ClientToken
 * @property int<1, 10> $NumTapesToCreate
 * @property string $TapeBarcodePrefix
 * @property bool $KMSEncrypted
 * @property string $KMSKey
 * @property string $PoolId
 * @property bool $Worm
 * @property list<Shapes\Tag> $Tags
 */
class CreateTapesRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     TapeSizeInBytes: int,
     *     ClientToken: string,
     *     NumTapesToCreate: int<1, 10>,
     *     TapeBarcodePrefix: string,
     *     KMSEncrypted?: bool,
     *     KMSKey?: string,
     *     PoolId?: string,
     *     Worm?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
