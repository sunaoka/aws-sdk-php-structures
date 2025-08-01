<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataProtectionSettingsArn
 * @property Shapes\InlineRedactionConfiguration|null $inlineRedactionConfiguration
 * @property string|null $displayName
 * @property string|null $description
 * @property string|null $clientToken
 */
class UpdateDataProtectionSettingsRequest extends Request
{
    /**
     * @param array{
     *     dataProtectionSettingsArn: string,
     *     inlineRedactionConfiguration?: Shapes\InlineRedactionConfiguration|null,
     *     displayName?: string|null,
     *     description?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
