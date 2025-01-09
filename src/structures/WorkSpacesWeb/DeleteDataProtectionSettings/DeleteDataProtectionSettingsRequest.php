<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteDataProtectionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataProtectionSettingsArn
 */
class DeleteDataProtectionSettingsRequest extends Request
{
    /**
     * @param array{dataProtectionSettingsArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
