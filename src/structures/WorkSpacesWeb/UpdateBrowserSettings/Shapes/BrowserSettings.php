<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateBrowserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $browserSettingsArn
 * @property list<string>|null $associatedPortalArns
 * @property string|null $browserPolicy
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 * @property WebContentFilteringPolicy|null $webContentFilteringPolicy
 */
class BrowserSettings extends Shape
{
    /**
     * @param array{
     *     browserSettingsArn: string,
     *     associatedPortalArns?: list<string>|null,
     *     browserPolicy?: string|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null,
     *     webContentFilteringPolicy?: WebContentFilteringPolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
