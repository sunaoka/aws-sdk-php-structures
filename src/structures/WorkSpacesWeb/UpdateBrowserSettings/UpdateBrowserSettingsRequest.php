<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserPolicy
 * @property string $browserSettingsArn
 * @property string $clientToken
 */
class UpdateBrowserSettingsRequest extends Request
{
    /**
     * @param array{
     *     browserPolicy?: string,
     *     browserSettingsArn: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
