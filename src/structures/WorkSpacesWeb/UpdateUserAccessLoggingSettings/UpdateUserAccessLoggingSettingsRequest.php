<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserAccessLoggingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $kinesisStreamArn
 * @property string $userAccessLoggingSettingsArn
 */
class UpdateUserAccessLoggingSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     kinesisStreamArn?: string,
     *     userAccessLoggingSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
