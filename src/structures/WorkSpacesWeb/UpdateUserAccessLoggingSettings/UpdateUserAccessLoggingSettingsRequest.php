<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserAccessLoggingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $kinesisStreamArn
 * @property string $userAccessLoggingSettingsArn
 */
class UpdateUserAccessLoggingSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     kinesisStreamArn?: string|null,
     *     userAccessLoggingSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
