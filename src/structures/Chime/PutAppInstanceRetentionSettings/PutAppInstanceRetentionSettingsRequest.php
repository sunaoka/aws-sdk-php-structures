<?php

namespace Sunaoka\Aws\Structures\Chime\PutAppInstanceRetentionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property Shapes\AppInstanceRetentionSettings $AppInstanceRetentionSettings
 */
class PutAppInstanceRetentionSettingsRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     AppInstanceRetentionSettings: Shapes\AppInstanceRetentionSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
