<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserAccessLoggingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $kinesisStreamArn
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 */
class CreateUserAccessLoggingSettingsRequest extends Request
{
    /**
     * @param array{
     *     kinesisStreamArn: string,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
