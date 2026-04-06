<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserAccessLoggingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $kinesisStreamArn
 * @property list<Shapes\Tag>|null $tags
 */
class CreateUserAccessLoggingSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     kinesisStreamArn: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
