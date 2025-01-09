<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteClientBranding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property list<'DeviceTypeWindows'|'DeviceTypeOsx'|'DeviceTypeAndroid'|'DeviceTypeIos'|'DeviceTypeLinux'|'DeviceTypeWeb'> $Platforms
 */
class DeleteClientBrandingRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     Platforms: list<'DeviceTypeWindows'|'DeviceTypeOsx'|'DeviceTypeAndroid'|'DeviceTypeIos'|'DeviceTypeLinux'|'DeviceTypeWeb'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
