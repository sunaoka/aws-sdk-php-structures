<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateBrowserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $additionalEncryptionContext
 * @property list<string> $associatedPortalArns
 * @property string $browserPolicy
 * @property string $browserSettingsArn
 * @property string $customerManagedKey
 */
class BrowserSettings extends Shape
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>,
     *     associatedPortalArns?: list<string>,
     *     browserPolicy?: string,
     *     browserSettingsArn: string,
     *     customerManagedKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
