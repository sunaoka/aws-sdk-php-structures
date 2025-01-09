<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetDataProtectionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataProtectionSettingsArn
 */
class GetDataProtectionSettingsRequest extends Request
{
    /**
     * @param array{dataProtectionSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
