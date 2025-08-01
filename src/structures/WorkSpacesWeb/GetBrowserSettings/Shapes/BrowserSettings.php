<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetBrowserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $browserSettingsArn
 * @property list<string>|null $associatedPortalArns
 * @property string|null $browserPolicy
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 */
class BrowserSettings extends Shape
{
    /**
     * @param array{
     *     browserSettingsArn: string,
     *     associatedPortalArns?: list<string>|null,
     *     browserPolicy?: string|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
