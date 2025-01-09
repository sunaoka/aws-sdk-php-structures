<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateTapeWithBarcode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int $TapeSizeInBytes
 * @property string $TapeBarcode
 * @property bool $KMSEncrypted
 * @property string $KMSKey
 * @property string $PoolId
 * @property bool $Worm
 * @property list<Shapes\Tag> $Tags
 */
class CreateTapeWithBarcodeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     TapeSizeInBytes: int,
     *     TapeBarcode: string,
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
