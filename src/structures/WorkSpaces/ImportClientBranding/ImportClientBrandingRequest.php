<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportClientBranding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property Shapes\DefaultImportClientBrandingAttributes $DeviceTypeWindows
 * @property Shapes\DefaultImportClientBrandingAttributes $DeviceTypeOsx
 * @property Shapes\DefaultImportClientBrandingAttributes $DeviceTypeAndroid
 * @property Shapes\IosImportClientBrandingAttributes $DeviceTypeIos
 * @property Shapes\DefaultImportClientBrandingAttributes $DeviceTypeLinux
 * @property Shapes\DefaultImportClientBrandingAttributes $DeviceTypeWeb
 */
class ImportClientBrandingRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     DeviceTypeWindows?: Shapes\DefaultImportClientBrandingAttributes,
     *     DeviceTypeOsx?: Shapes\DefaultImportClientBrandingAttributes,
     *     DeviceTypeAndroid?: Shapes\DefaultImportClientBrandingAttributes,
     *     DeviceTypeIos?: Shapes\IosImportClientBrandingAttributes,
     *     DeviceTypeLinux?: Shapes\DefaultImportClientBrandingAttributes,
     *     DeviceTypeWeb?: Shapes\DefaultImportClientBrandingAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
