<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateTapes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int $TapeSizeInBytes
 * @property string $ClientToken
 * @property int<1, 10> $NumTapesToCreate
 * @property string $TapeBarcodePrefix
 * @property bool|null $KMSEncrypted
 * @property string|null $KMSKey
 * @property string|null $PoolId
 * @property bool|null $Worm
 * @property list<Shapes\Tag>|null $Tags
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
     *     KMSEncrypted?: bool|null,
     *     KMSKey?: string|null,
     *     PoolId?: string|null,
     *     Worm?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
