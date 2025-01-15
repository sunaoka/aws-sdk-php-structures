<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportClientBranding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property Shapes\DefaultImportClientBrandingAttributes|null $DeviceTypeWindows
 * @property Shapes\DefaultImportClientBrandingAttributes|null $DeviceTypeOsx
 * @property Shapes\DefaultImportClientBrandingAttributes|null $DeviceTypeAndroid
 * @property Shapes\IosImportClientBrandingAttributes|null $DeviceTypeIos
 * @property Shapes\DefaultImportClientBrandingAttributes|null $DeviceTypeLinux
 * @property Shapes\DefaultImportClientBrandingAttributes|null $DeviceTypeWeb
 */
class ImportClientBrandingRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     DeviceTypeWindows?: Shapes\DefaultImportClientBrandingAttributes|null,
     *     DeviceTypeOsx?: Shapes\DefaultImportClientBrandingAttributes|null,
     *     DeviceTypeAndroid?: Shapes\DefaultImportClientBrandingAttributes|null,
     *     DeviceTypeIos?: Shapes\IosImportClientBrandingAttributes|null,
     *     DeviceTypeLinux?: Shapes\DefaultImportClientBrandingAttributes|null,
     *     DeviceTypeWeb?: Shapes\DefaultImportClientBrandingAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
