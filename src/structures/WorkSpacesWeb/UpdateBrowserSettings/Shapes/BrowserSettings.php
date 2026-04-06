<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateBrowserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $associatedPortalArns
 * @property string|null $browserPolicy
 * @property string $browserSettingsArn
 */
class BrowserSettings extends Shape
{
    /**
     * @param array{
     *     associatedPortalArns?: list<string>|null,
     *     browserPolicy?: string|null,
     *     browserSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
