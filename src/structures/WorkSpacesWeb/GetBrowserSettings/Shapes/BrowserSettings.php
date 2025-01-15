<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetBrowserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $additionalEncryptionContext
 * @property list<string>|null $associatedPortalArns
 * @property string|null $browserPolicy
 * @property string $browserSettingsArn
 * @property string|null $customerManagedKey
 */
class BrowserSettings extends Shape
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>|null,
     *     associatedPortalArns?: list<string>|null,
     *     browserPolicy?: string|null,
     *     browserSettingsArn: string,
     *     customerManagedKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
