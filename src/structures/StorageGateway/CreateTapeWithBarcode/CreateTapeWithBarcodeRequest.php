<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateTapeWithBarcode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int $TapeSizeInBytes
 * @property string $TapeBarcode
 * @property bool|null $KMSEncrypted
 * @property string|null $KMSKey
 * @property string|null $PoolId
 * @property bool|null $Worm
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateTapeWithBarcodeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     TapeSizeInBytes: int,
     *     TapeBarcode: string,
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
