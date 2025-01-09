<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserAccessLoggingSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $kinesisStreamArn
 * @property list<Shapes\Tag> $tags
 */
class CreateUserAccessLoggingSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     kinesisStreamArn: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
