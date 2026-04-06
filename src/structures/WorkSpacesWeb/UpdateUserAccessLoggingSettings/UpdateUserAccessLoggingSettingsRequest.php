<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserAccessLoggingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userAccessLoggingSettingsArn
 * @property string|null $kinesisStreamArn
 * @property string|null $clientToken
 */
class UpdateUserAccessLoggingSettingsRequest extends Request
{
    /**
     * @param array{
     *     userAccessLoggingSettingsArn: string,
     *     kinesisStreamArn?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
