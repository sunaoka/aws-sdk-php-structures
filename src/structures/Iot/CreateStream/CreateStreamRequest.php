<?php

namespace Sunaoka\Aws\Structures\Iot\CreateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $streamId
 * @property string $description
 * @property list<Shapes\StreamFile> $files
 * @property string $roleArn
 * @property list<Shapes\Tag> $tags
 */
class CreateStreamRequest extends Request
{
    /**
     * @param array{
     *     streamId: string,
     *     description?: string,
     *     files: list<Shapes\StreamFile>,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
