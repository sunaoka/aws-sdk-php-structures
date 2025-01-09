<?php

namespace Sunaoka\Aws\Structures\Chime\PutRetentionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property Shapes\RetentionSettings $RetentionSettings
 */
class PutRetentionSettingsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     RetentionSettings: Shapes\RetentionSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
