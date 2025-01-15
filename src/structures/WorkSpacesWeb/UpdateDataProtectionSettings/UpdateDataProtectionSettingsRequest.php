<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $dataProtectionSettingsArn
 * @property string|null $description
 * @property string|null $displayName
 * @property Shapes\InlineRedactionConfiguration|null $inlineRedactionConfiguration
 */
class UpdateDataProtectionSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     dataProtectionSettingsArn: string,
     *     description?: string|null,
     *     displayName?: string|null,
     *     inlineRedactionConfiguration?: Shapes\InlineRedactionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
